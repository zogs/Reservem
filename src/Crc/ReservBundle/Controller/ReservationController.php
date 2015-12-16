<?php

namespace Crc\ReservBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

use Crc\ReservBundle\Entity\Reservation;
use Crc\ReservBundle\Entity\Department;
use Crc\ReservBundle\Entity\Device;
use Crc\ReservBundle\Form\ReservationDevicesType;
use Crc\ReservBundle\Form\ReservationRangeType;

class ReservationController extends Controller
{

	public function createAction(Department $department)
	{
		if(false == $department->isMember($this->getUser())) {
			$this->get('flashbag')->add('Vous ne pouvez pas réserver pour cette composante');
			return $this->redirectToRoute('crc_reserv_home');
		}

		$reservation = new Reservation();
		$reservation->setDepartment($department);
		$form = $this->createForm(new ReservationRangeType($reservation));

		$form->handleRequest($this->getRequest());

		if($form->isValid()) {

			$begin = $form->getData()->getDateBegin();
			$end = $form->getData()->getDateEnd();
			$availables = $this->get('reservation.manager')->getDevicesAvailable($begin,$end,$department);
			$reservation->setDateBegin($begin);
			$reservation->setDateEnd($end);
			$form = $this->createForm('reservation_form',$reservation,array('action'=> $this->generateUrl('crc_reserv_recap',array('department'=>$department->getId()))));			

			return $this->render('CrcReservBundle:Reservation:availables.html.twig',array(
				'form' => $form->createView(),
				'availables' => $availables,
				'department' => $department,
				));
			
		}

		return $this->render('CrcReservBundle:Reservation:range.html.twig',array(
			'form' => $form->createView(),
			'department' => $department
			))
		;

	}

	public function recapAction(Department $department)
	{
		$reserv = new Reservation();
		$reserv->setDepartment($department);
		$form = $this->createForm('reservation_form',$reserv);

		$form->handleRequest($this->getRequest());

		if($form->isValid()) {
			
			$availables = $this->get('reservation.manager')->getDevicesAvailable($reserv->getDateBegin(),$reserv->getDateEnd(),$department);
			$reserv = $this->get('reservation.manager')->addDevicesReservation($reserv,$availables,$this->getRequest()->get('reservation_devices_number'));

			if(false == $reserv) {
				$this->get('flashbag')->add("Désolé mais il n'y a pas assez d'équipements disponibles pour cette réservation...",'error');
				return $this->redirectToRoute('crc_reserv_device_available',array('department'=>$department->getId()));						
			} else {
				$reserv->setConfirmed(true);
				$reserv = $this->get('reservation.manager')->saveReservation($reserv);			
				$this->get('flashbag')->add("Vos équipements sont maintenant réservés ! ","info");			
			}

			return $this->render('CrcReservBundle:Reservation:recap.html.twig',array(
				'reservation' => $reserv,
			));
		}

		return $this->render('CrcReservBundle:Reservation:range.html.twig',array(
			'form' => $form->createView(),
			));
	}

	public function addDevicesAction(Reservation $reservation)
	{
		$availables = $this->get('reservation.manager')->getDevicesAvailable($reservation->getDateBegin(),$reservation->getDateEnd(),$reservation->getDepartment());

		$form = $this->createForm('reservation_form',$reservation,array('action'=> $this->generateUrl('crc_reserv_add_devices',array('id'=>$reservation->getId()))));
		$form->handleRequest($this->getRequest());

		if($form->isValid()) {

			$reserv = $this->get('reservation.manager')->addDevicesReservation($reservation,$availables,$this->getRequest()->request->get('reservation_devices_number'));

			if(false == $reserv) {
				$this->get('flashbag')->add("Désolé mais il n'y a pas assez d'équipements disponibles pour ajouter...",'error');		
			} else {
				$reserv = $this->get('reservation.manager')->saveReservation($reserv);
				$this->get('flashbag')->add('Des équipements ont bien été ajoutés');				
			}
			return $this->redirect($this->generateUrl('crc_reserv_edit',array('id'=>$reservation->getId())));

		}

		return $this->render('CrcReservBundle:Reservation:add_devices.html.twig',array(
			'form' => $form->createView(),
			'availables' => $availables,
			'reservation' => $reservation,
			));

	}

	public function replaceDeviceMissingAction($device,$reservation)
	{
		$reservation = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findOneById($reservation);
		$device = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findOneById($device);
		
		$this->get('device.manager')->saveAsMissing($device);
		$reservation->removeDevice($device);

		$availables = $this->get('reservation.manager')->getDevicesAvailable($reservation->getDateBegin(),$reservation->getDateEnd(),$reservation->getDepartment());
		try {
			$reservation = $this->get('reservation.manager')->addDevicesReservation($reservation,$availables,array($device->getType()=>1));		
			$reservation = $this->get('reservation.manager')->saveReservation($reservation);
			$this->get('flashbag')->add("L' équipement ".$device->getType().' '.$device->getCode()."  est maintenant signalé comme manquant. Il a été remplacé automatiquement par un autre équipement !");
		}
		catch(\Exception $e) {

			$this->get('flashbag')->add($e->getMessage(),'error');
		}

		return $this->redirect($this->generateUrl('crc_reserv_edit',array('id'=>$reservation->getId())));

	}

	public function replaceDeviceDefectedAction($device,$reservation)
	{
		$reservation = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findOneById($reservation);
		$device = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findOneById($device);
		dump($device);
		exit();
		$this->get('device.manager')->saveAsDefected($device);
		$reservation->removeDevice($device);

		$availables = $this->get('reservation.manager')->getDevicesAvailable($reservation->getDateBegin(),$reservation->getDateEnd());
		try {
			$reservation = $this->get('reservation.manager')->addDevicesReservation($reservation,$availables,array($device->getType()=>1));			
			$reservation = $this->get('reservation.manager')->saveReservation($reservation);
			$this->get('flashbag')->add("L' équipement ".$device->getType().' '.$device->getCode()." a été remplacé ! Il est maintenant marqué comme défecteux...");
		}
		catch(\Exception $e) {
			$this->get('flashbag')->add($e->getMessage(),'error');
		}

		return $this->redirect($this->generateUrl('crc_reserv_edit',array('id'=>$reservation->getId())));

	}


	public function notifyDeviceDefectedAction(Device $device,Reservation $reservation,$redirect)
	{
		$builder = $this->createFormBuilder($device);
		$builder->add('comment','textarea');		
		$form = $builder->getForm();

		$form->handleRequest($this->getRequest());
		if($form->isValid()) {
			
			$this->get('device.manager')->save($device);
			return $this->redirect($this->generateUrl($redirect,array('device'=>$device->getId(),'reservation'=>$reservation->getId())));

		}

		return $this->render('CrcReservBundle:Device:missing.html.twig',array(
			'form' => $form->createView(),
			'device' => $device,
			'reservation' => $reservation,
			));
	}

	public function cancelDeviceAction($device,$reservation) 
	{
		$reservation = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findOneById($reservation);
		$device = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findOneById($device);
		
		$reservation->removeDevice($device);
		$reservation = $this->get('reservation.manager')->saveReservation($reservation);
		$this->get('flashbag')->add("La rservation de l' équipement ".$device->getType().' '.$device->getCode()." a été annulé...","info");

		return $this->redirect($this->generateUrl('crc_reserv_edit',array('id'=>$reservation->getId())));

	}

	public function viewAction(Reservation $reservation) 
	{		

		return $this->render('CrcReservBundle:Reservation:view.html.twig',array(
			'reservation' => $reservation,
			));
	}

	public function editAction(Reservation $reservation) 
	{		

		return $this->render('CrcReservBundle:Reservation:recap.html.twig',array(
			'reservation' => $reservation,
			));
	}

	public function confirmAction(Reservation $reservation)
	{
		if($reservation->getUser() != $this->getUser()) throw new \Exception("You can not confirm this reservation", 1);

		if($this->get('reservation.manager')->isDevicesAvailables($reservation->getDevices(),$reservation->getDateBegin(),$reservation->getDateEnd(),$reservation->getDepartment())) {

			$this->get('reservation.manager')->confirmReservation($reservation);
			$this->get('reservation.mailer')->sendConfirmed($reservation);
			$this->get('flashbag')->add('Votre réservation est à présent validé ! Merci de penser à valider la sortie et le retour des équipements.');
		}
		else {
			$this->get('flashbag')->add("Cette réservation n'est plus possible car des équipements ne sont plus disponibles... Veuillez recommencer une nouvelle réservation.","warning");
		}
		
			
		return $this->redirect($this->generateUrl('crc_reserv_my_reservations'));	
	}

	public function cancelAction(Reservation $reservation)
	{
		if($reservation->getUser() != $this->getUser()) throw new \Exception("You can not delete this reservation", 1);
				
		if($reservation->getOngoing() == false) {
			$this->get('reservation.manager')->deleteReservation($reservation);
			$this->get('flashbag')->add('Votre réservation a bien été annulé.');
		}
		else {
			$this->get('flashbag')->add('Vous ne pouvez pas annuler une reservation qui est en cours...','error');

		}

		return $this->redirect($this->generateUrl('crc_reserv_my_reservations'));	
	}

	public function listAction(Department $department)
	{
		$reservs = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findConfirmedByDepartment($department);

		return $this->render('CrcReservBundle:Reservation:list.html.twig',array(
			'reservations' => $reservs,
			));
	}

	public function mineAction(Request $request)
	{
		$reservations = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findActiveByUser($this->getUser());

		return $this->render('CrcReservBundle:Reservation:list.html.twig',array(
			'reservations' => $reservations
			));
	}


	public function completeTakeoutAction(Reservation $reservation) 
	{

		$left = $this->get('reservation.manager')->getDevicesToTakeout($reservation);

		if(count($left == 0)) {
			$this->get('device.manager')->onTheGroundDevices($reservation->getDevices());
			$this->get('reservation.manager')->setOngoing($reservation);
			$this->get('flashbag')->add("Merci d'avoir confirmé cette sortie, et bon courage sur le terrain !","success");
			return $this->redirect($this->generateUrl('crc_reserv_my_reservations'));
		}
		else {

			$this->get('flashbag')->add("Il reste ".count($left)." équipements à scanner","warning");
			return $this->render('CrcReservBundle:Reservation:takeout.html.twig', array(
				'reservation' => $reservation,
				));
		}


	}

	public function takeoutAction(Reservation $reservation)
	{

		//checkbox validation
		/*if($this->getRequest()->request->has('device')) {

			$devices = $this->getRequest()->request->get('device');

			if(count($devices) < $reservation->getDevices()->count()) {
				$this->get('flashbag')->add("Vous n'avez pas confirmé tous les équipements...","warning");
			} else {
				$this->get('device.manager')->onTheGroundDevices($devices);
				$this->get('reservation.manager')->setOnTheGround($reservation);
				$this->get('flashbag')->add("Merci d'avoir confirmé cette sortie, et bon courage sur le terrain !","success");

				return $this->redirect($this->generateUrl('crc_reserv_my_reservations'));
			}
		}*/

		
		return $this->render('CrcReservBundle:Reservation:takeout.html.twig', array(
			'reservation' => $reservation,
			));
	}

	public function returnAction(Reservation $reservation)
	{
			
		if($this->getRequest()->request->has('device')) {

			$devices = $this->getRequest()->request->get('device');
			if(count($devices) < $reservation->getDevices()->count()) {
				$this->get('device.manager')->returnDevices($devices);
				$this->get('flashbag')->add("Il reste encore des équipements à retourner...","warning");
			} elseif(count($devices) == 0) {
				$this->get('flashbag')->add("Vous n'avez cocher aucun équipements...","error");
			} elseif(count($devices) == $reservation->getDevices()->count())  {
				$this->get('device.manager')->returnDevices($devices);
				$this->get('reservation.manager')->setReturned($reservation);
				$this->get('flashbag')->add("Merci d'avoir retourné tous les équipements ! Et bonne journée :)","success");
				return $this->redirect($this->generateUrl('crc_reserv_my_reservations'));
			}
		}
		
		return $this->render('CrcReservBundle:Reservation:return.html.twig', array(
			'reservation' => $reservation,
			));
	}

	public function completeReturnAction(Reservation $reservation) 
	{

		$left = $this->get('reservation.manager')->getDevicesToReturn($reservation);

		if(count($left == 0)) {
			$this->get('device.manager')->returnDevices($reservation->getDevices());
			$this->get('reservation.manager')->deleteReservation($reservation);
			$this->get('flashbag')->add("Merci d'avoir retourné les équipements, et à bientôt !","success");
			return $this->redirect($this->generateUrl('crc_reserv_my_reservations'));
		}
		else {

			$this->get('flashbag')->add("Il reste ".count($left)." équipements à scanner","warning");
			return $this->render('CrcReservBundle:Reservation:return.html.twig', array(
				'reservation' => $reservation,
				));
		}


	}

	private function returnDevice(Device $device, Reservation $reservation)
	{
		$this->get('device.manager')->saveAsReturned($device);
		$reservation->removeDevice($device);	
		$this->get('reservation.manager')->saveReservation($reservation);

		if($reservation->getDevices()->count()==0) {
			$this->get('reservation.manager')->setReturned($reservation);
			$this->get('flashbag')->add("Vous avez retournés tous les équipements, la réservation est maintenant terminée ! A la prochaine :) ","success");
		}

		return $reservation;	
	}

	/* no use */
	public function returnDeviceAction($device,$reservation)
	{
		$reservation = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findOneById($reservation);
		$device = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findOneById($device);
		
		$this->returnDevice($device,$reservation);	

		$this->get('flashbag')->add("L' équipement ".$device->getType().' '.$device->getCode()." a bien été retourné !");

		return $this->redirect($this->generateUrl('crc_reserv_return',array('id'=>$reservation->getId())));
	}

	public function returnDeviceMissingAction($device,$reservation)
	{
		$reservation = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findOneById($reservation);
		$device = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findOneById($device);
		
		$this->get('device.manager')->saveAsMissing($device);
		$this->returnDevice($device,$reservation);	

		$this->get('flashbag')->add("L' équipement ".$device->getType().' '.$device->getCode()." a bien été marqué comme manquant...");

		return $this->redirect($this->generateUrl('crc_reserv_return',array('id'=>$reservation->getId())));
	}

	public function returnDeviceDefectedAction($device,$reservation)
	{
		$reservation = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findOneById($reservation);
		$device = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Device')->findOneById($device);
		
		$this->get('device.manager')->saveAsDefected($device);
		$this->returnDevice($device,$reservation);

		$this->get('flashbag')->add("L' équipement ".$device->getType().' '.$device->getCode()." a bien été marqué comme défectueux...");
		
		return $this->redirect($this->generateUrl('crc_reserv_return',array('id'=>$reservation->getId())));
	}


	public function extendAction(Reservation $reservation)
	{
		
		$form = $this->createForm('extend_reservation_form',$reservation);
		$form->handleRequest($this->getRequest());

		if($form->isValid()) {

			$res = $this->get('reservation.manager')->extendReservation($reservation,$form->get('date_end')->getData());
			if($res == false) {
				$this->get('flashbag')->add("Malheuresement la réservation ne peux pas être étendu car des équipements sont réservés par d'autres utilisateurs et ne peuvent être remplacés...","error");
			} else {
				$this->get('flashbag')->add("La réservation a été étendu avec succès jusqu'au <strong>".$res->getDateEnd()->format('d-m-Y')."</strong> !","success");
				return $this->redirect($this->generateUrl('crc_reserv_my_reservations'));
			}

		}

		return $this->render('CrcReservBundle:Reservation:extend.html.twig',array(
			'form' => $form->createView(),
			'reservation' => $reservation
			));
	}

	public function checkExtendableAction(Reservation $reservation)
	{

		$form = $this->createForm('extend_reservation_form',$reservation);
		$form->handleRequest($this->getRequest());
		$reserved = null;
		$date = null;

		if($form->isValid()) {

			$reserved = $this->get('reservation.manager')->getExtendReservedDevices($reservation,$form->get('date_end')->getData());
			$date = $form->get('date_end')->getData();
			
		}

		return $this->render('CrcReservBundle:Reservation:extend.html.twig',array(
			'form' => $form->createView(),
			'reservation' => $reservation,
			'reserved' => $reserved,
			'date' => $date,
			));
	}

	public function checkIncomingTakeoutAction()
	{
		$reservations = $this->get('reservation.manager')->getIncomingTakeOut(37);

		dump($reservations);
		exit();

		//TO DO : send rappel
	}

	public function checkIncomingReturnAction()
	{
		$reservations = $this->get('reservation.manager')->getIncomingReturn(37);

		dump($reservations);
		exit();

		//TO DO : send rappel
	}
}
