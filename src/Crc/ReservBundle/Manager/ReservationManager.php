<?php

namespace Crc\ReservBundle\Manager;

use Zogs\ManagerBundle\Manager\AbstractManager;

use Crc\ReservBundle\Entity\Device;
use Crc\ReservBundle\Entity\Reservation;
use Crc\ReservBundle\Entity\Department;


class ReservationManager extends AbstractManager
{
	protected $em;

	
	public function getDevicesAvailable(\Datetime $begin, \Datetime $end, Department $department)
	{		
		
		$reservations = $this->em->getRepository('CrcReservBundle:Reservation')->findConfirmedByDepartment($department);

		//find all devices reserved between the reservation dates
		$reserved = array();
		foreach ($reservations as $r) {

			if(
				($begin >= $r->getDateBegin() && $begin <= $r->getDateEnd())
				||
				($end >= $r->getDateBegin() && $end <= $r->getDateEnd())
				||
				($r->getDateBegin() >= $begin && $r->getDateBegin() <= $end)
				||
				($r->getDateEnd() >= $begin && $r->getDateEnd() <= $end)
				||
				($r->getDateBegin() == $begin && $r->getDateEnd() == $end)
			) {
				$types_in_use = $r->getAllTypes();

				foreach ($types_in_use as $type) {
					
					if(isset($reserved[$type])) $reserved[$type] = array_merge($reserved[$type],$r->getDevicesByType($type));
					else $reserved[$type] = $r->getDevicesByType($type);					
				}
				
			}
			
		}


		//find on-stock devices , grouped by type
		$availables = $this->em->getRepository('CrcReservBundle:Device')->findAvailablesByDepartment($department);
		
		//remove devices that are reserved
		foreach ($availables as $type => $devices) {
			
			if(isset($reserved[$type])) {
				foreach ($devices as $k => $device) {					
					if( in_array($device,$reserved[$type])) unset($availables[$type][$k]);
				}
				$availables[$type] = array_values($availables[$type]); //rebuild keys				
			}
		}
		//return only the available ones
		return $availables;
	}

	public function isDevicesAvailables($devices,\Datetime $begin, \Datetime $end,Department $department)
	{

		$availables = $this->getDevicesAvailable($begin,$end,$department);

		foreach ($devices as $key => $device) {
			
			if( ! in_array($device,$availables[$device->getType()])) return false;
		}

		return true;
	}

	public function addDevicesReservation(Reservation $reservation, $availables, $wanted) 
	{
		if(empty($availables)) throw new \Exception("Il n'y a pas d'équipements de disponible...", 1);
		

		foreach ($wanted as $type => $number) {
			

			if($number > count($availables[$type])) return false;

			for($i = 0; $i < $number; $i++) {

				$reservation->addDevice($availables[$type][$i]);
			}
		}

		return $reservation;

	}


	public function setOngoing(Reservation $reservation)
	{
		$reservation->setOngoing(true);
		$this->saveReservation($reservation);

		return $this;
	}

	public function setReturned(Reservation $reservation)
	{
		$reservation->setOngoing(false);
		$this->saveReservation($reservation);
		return $this;
	}

	public function saveReservation(Reservation $reservation)
	{
		$this->save($reservation,true);

		return $reservation;
	}

	public function confirmReservation(Reservation $reservation)
	{
		$reservation->setConfirmed(true);
		$this->save($reservation,true);

		return $reservation;
	}

	public function deleteReservation(Reservation $reservation)
	{		
		$reservation->setActive(false)->setOngoing(false)->setConfirmed(false);

		$this->save($reservation,true);

		return true;
	}

	public function getDevicesToTakeout(Reservation $reservation)
	{
		$devices = $reservation->getDevices();
		$array = array();
		foreach ($devices as $device) {
			
			if($device->getOnTheGround() == false) $array[] = $device;
		}
		return $array;
	}

	public function getDevicesToReturn(Reservation $reservation)
	{
		$devices = $reservation->getDevices();
		$array = array();
		foreach ($devices as $device) {
			
			if($device->getOnTheGround() == true) $array[] = $device;
		}
		return $array;
	}

	public function replaceDevice(Reservation $reservation, Device $device, $save_it = true)
	{
		if( ! $reservation->getDevices()->contains($device)) throw new \Exception("Can't replace device because Reservation does not contain this device", 1);
		
		//get all available devices for the period
		$availables = $this->getDevicesAvailable($reservation->getDateBegin(),$reservation->getDateEnd());

		//check if one same device match
		if(! empty($availables[$device->getType()])) {
			//replace it
			$reservation->removeDevice($device);
			$reservation->addDevice($availables[$device->getType()][0]);
		}
		//else, there is no device available
		else {
			return false;
		}

		//save it or not
		if($save_it == true) $this->saveReservation($reservation);

		return $reservation;

	}

	public function extendReservation(Reservation $reservation, \Datetime $date)
	{
		$used = $reservation->getDevices();
		$reservations = $this->em->getRepository('CrcReservBundle:Reservation')->findConfirmedByDepartment($reservation->getDepartment());
		$concerned = array();
		foreach ($reservations as $k => $r) {
						
			//exclude current reservation
			if($r->getId() == $reservation->getId()) continue;

			//if date period crossed each other
			if($r->getDateBegin() <= $date) {

				//look for devices that are used by current reservation
				$reserved = $r->getDevices();
				foreach ($reserved as $d) {					
					if($used->contains($d)) {
						//increment devices to be replaced
						if(empty($r->to_be_replaced)) $r->to_be_replaced = array();
						$r->to_be_replaced[] = $d;
					}
				}
			}


			//if there is device that are reserved, try to replace it
			if( ! empty($r->to_be_replaced)) {
				//stock concerned reservation
				$concerned[] = $r;

				//try to replace devices
				foreach ($r->to_be_replaced as $d) {
					$res = $this->replaceDevice($r,$d,false);
					//if replacing a device can not be done, break this loop 
					if($res == false) {
						$r->can_be_replaced = false;
						break;
					} else {
						$r = $res;
						$r->can_be_replaced = true;
					}
				}				
			}

		}
	
		//check if one device can not be replaced
		foreach ($concerned as $r) {

			//return false if not
			if($r->can_be_replaced == false) return false;

		}

		//all device can be replaced
		foreach ($concerned as $r) {
			//save it
			$this->saveReservation($r);
			//email 
			$this->emailReplacement($r);

		}

		//save extended reservation
		$this->saveReservation($reservation);

		return $reservation;

	}

	public function getIncomingTakeOut($nbdays)
	{
		return $this->em->getRepository('CrcReservBundle:Reservation')->findByIncomingBeginDate($nbdays);
	}

	public function getIncomingReturn($nbdays)
	{
		return $this->em->getRepository('CrcReservBundle:Reservation')->findByIncomingEndDate($nbdays);
	}

	public function emailReplacement(Reservation $reservation)
	{
		dump($reservation->to_be_replaced);
	}


}
?>