<?php

namespace Crc\ReservBundle\Manager;

use Zogs\ManagerBundle\Manager\AbstractManager;

use Crc\ReservBundle\Entity\Device;
use Crc\ReservBundle\Entity\Department;
use Zogs\UserBundle\Entity\User;


class DeviceManager extends AbstractManager
{
	protected $em;
	private $user;

	
	public function saveDevice(Device $device)
	{		
		

		$this->save($device);
		return true;	
	}

	public function saveAsMissing(Device $device)
	{
		$device->setMissing(true);
		return $this->saveDevice($device);
	}

	public function saveAsRecovered(Device $device)
	{
		$device->setMissing(false);
		return $this->saveDevice($device);
	}

	public function saveAsDefected(Device $device)
	{
		$device->setWorking(false);
		return $this->saveDevice($device);
	}

	public function saveAsRepared(Device $device)
	{
		$device->setWorking(true);
		return $this->saveDevice($device);
	}

	public function saveAsOnTheGround(Device $device)
	{
		$device->setOnTheGround(true);
		return $this->saveDevice($device);
	}

	public function saveAsReturned(Device $device)
	{
		$device->setOnTheGround(false);
		return $this->saveDevice($device);
	}

	public function getDepartmentDevicesAvailables(Department $department)
	{
		$all = $this->em->getRepository('CrcReservBundle:Device')->findByDepartment($department);
		
		$devices = array();
		foreach ($all as $d) {
			if( ! isset($devices[$d->getType()])){
				$devices[$d->getType()] = array($d);
			} else {
				$devices[$d->getType()][] = $d;
			}	
		}
		return $devices;
	}

	/**
	 * Mark as "on the ground" the device
	 *
	 * @param array of devices ids
	 */
	public function onTheGroundDevices($devices)
	{
		foreach ($devices as $id) {

			$device = $this->em->getRepository('CrcReservBundle:Device')->findOneById($id);

			$this->saveAsOnTheGround($device);
		}
	}

	/**
	 * Mark as "out the ground" the device
	 *
	 * @param array of devices ids
	 */
	public function returnDevices($devices)
	{
		foreach ($devices as $id) {

			$device = $this->em->getRepository('CrcReservBundle:Device')->findOneById($id);

			$this->saveAsReturned($device);
		}
	}

	public function setCreator(User $user)
	{
		$this->user = $user;
	}

	public function create(Device $device, User $user, Department $department, $quantity = 1)
	{

		$existing = $this->em->getRepository('CrcReservBundle:Device')->findBy(array('type'=>$device->getType()),array('id'=>'DESC'));
		if(empty($existing)) $counter = 1;
		else $counter = intval(preg_replace('/[^0-9]/','',$existing[0]->getCode()));


		for($i = 0; $i<$quantity; $i++) {

			$counter++;
			$code = $department->getAcronyme().'.'.$device->getCode().$counter;

			$d = clone($device);
			$d->setCode($code);
			$d->setCreator($user);
			$d->setDepartment($department);

			$this->em->persist($d);

		}

		$this->em->flush();

		return $i;
	}

}
?>