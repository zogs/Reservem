<?php

namespace Crc\ReservBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;

use Crc\ReservBundle\Entity\Device;
use Crc\ReservBundle\Entity\Department;

class DeviceController extends Controller
{
	public function availablesAction(Department $department)
	{
		$devices = $this->get('device.manager')->getDepartmentDevicesAvailables($department);
		$reservations = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findConfirmedByDepartment($department);
		
		return $this->render('CrcReservBundle:Device:availables.html.twig', array(
			'devices' => $devices,
			'reservations' => $reservations,
			'department' => $department,
			));
	}

	public function indexAction(Department $department,$type = null) {

		if($type == null)
			$devices = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findByDepartment($department);
		else
			$devices = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findBy(array(
															'department' => $department,
															'slug' => $type
															));

		return $this->render('CrcReservBundle:Device:index.html.twig',array(
			'devices' => $devices,
			'department' => $department,
			));
		
	}

	public function stockAction(Department $department) {
		
		$devices = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findBy(array(
															'department' => $department,
															'on_the_ground' => false
															));		

		return $this->render('CrcReservBundle:Device:on_stock.html.twig',array(
			'devices' => $devices,
			'department' => $department
			));
	}

	public function onfieldAction(Department $department) {
		
		$devices = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findBy(array(
															'department' => $department,
															'on_the_ground' => true
															));		

		return $this->render('CrcReservBundle:Device:on_field.html.twig',array(
			'devices' => $devices,
			'department' => $department
			));
	}

	public function printListAction(Department $department,$size) {

		$devices = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findByDepartment($department);

		return $this->render('CrcReservBundle:Device:print_list.html.twig',array(
			'devices' => $devices,
			'size' => $size,
			'department' => $department,
			));
	}

	public function printLabelAction(Device $device,$size)
	{

		return $this->render('CrcReservBundle:Device:print_label.html.twig',array(
			'device' => $device,
			'size' => $size,
			));
	}

	public function takeoutAction() {

		$query = $this->getRequest()->query->all();

		$device = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findOneByCode($query['barcode']);
		
		if(empty($device)) return new JsonResponse(array('error'=> 'Device can not be found'));

		$reservation = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findOneById($query['reservid']);

		if(empty($reservation)) return new JsonResponse(array('error' => 'Reservation can not be found'));

		if($reservation->getDevices()->contains($device)) {

			$this->get('device.manager')->saveAsOnTheGround($device);
			$left = $this->get('reservation.manager')->getDevicesToTakeout($reservation);

			return new JsonResponse(array('device' => $device->getId(),'left'=>count($left)));
		}
		else {
			return new JsonResponse(array('error' => 'This device is not reserved for the reservation'));
		}
		
	}

	public function returnAction() {

		$query = $this->getRequest()->query->all();

		$device = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findOneByCode($query['barcode']);
		
		if(empty($device)) return new JsonResponse(array('error'=> 'Device can not be found'));

		$reservation = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findOneById($query['reservid']);

		if(empty($reservation)) return new JsonResponse(array('error' => 'Reservation can not be found'));

		if($reservation->getDevices()->contains($device)) {

			$this->get('device.manager')->saveAsReturned($device);
			$left = $this->get('reservation.manager')->getDevicesToReturn($reservation);

			return new JsonResponse(array('device' => $device->getId(),'left'=>count($left)));
		}
		else {
			return new JsonResponse(array('error' => 'This device is not reserved for the reservation'));
		}
		
	}

	public function editAction(Device $device )
	{
		$form = $this->createForm('device_form',$device);

		$form->handleRequest($this->getRequest());

		if($form->isValid()) {

			$this->get('device.manager')->saveDevice($device);

			$this->get('flashbag')->add('Equipement sauvegardé !');

			return $this->redirect($this->generateUrl('crc_reserv_device_index',array('department'=>$device->getDepartment()->getId())));
		}

		return $this->render('CrcReservBundle:Device:edit.html.twig',array(
			'form' => $form->createView(),
			))
		;
	}


	public function createAction(Device $device = null)
	{		
		if($device === null) $device = new Device();		
		$form = $this->createForm('add_devices_form',$device);

		$form->handleRequest($this->getRequest());
		if($form->isValid()) {

			$quantity = $form->get('quantity')->getData();
			$department = $form->get('department')->getData();
			$user = $this->getUser();

			//security
			if( ! $department->isAdmin($user)) {
				$this->get('flashbag')->add("Vous n'ètes pas administrateur de cette composante...",'error');
				return $this->redirect($this->generateUrl('crc_reserv_department_admin',array('id'=>$department->getId())));
			}

			$this->get('device.manager')->create($device,$user,$department,$quantity);
			
			return $this->redirect($this->generateUrl('crc_reserv_device_index',array('department'=>$device->getDepartment()->getId())));
		}

		return $this->render('CrcReservBundle:Device:add.html.twig',array(
			'form' => $form->createView(),
			))
		;
	}

	public function removeAction(Device $device)
	{

		$this->get('device.manager')->delete($device);

		$this->get('flashbag')->add("L'équipement a été supprimé !");

		return $this->redirectToRoute('crc_reserv_device_index',array('department'=>$device->getDepartment()->getId()));
	}
}
