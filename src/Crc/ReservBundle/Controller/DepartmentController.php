<?php

namespace Crc\ReservBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;

use Crc\ReservBundle\Entity\Department;
use Crc\ReservBundle\Entity\Device;
use Zogs\UserBundle\Entity\User;

class DepartmentController extends Controller
{
	public function indexAction()
	{
		$departments = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Department')->findAll();

		return $this->render('CrcReservBundle:Department:index.html.twig', array(
			'departments' => $departments
			));
	}

	public function createAction(Request $request)
	{

		$department = new Department();
		$form = $this->createForm('department_form',$department);

		$form->handleRequest($request);
		if($form->isValid()) {

			$department = $form->getData();
			$this->get('department.manager')->save($department);
			return $this->redirect('crc_reserv_department_index');
		}

		return $this->render('CrcReservBundle:Department:create.html.twig', array(
			'form' => $form->createView(),
			));
	}


	public function editAction(Department $department) 
	{
		$form = $this->createForm('department_form',$department);

		$form->handleRequest($this->getRequest());
		if($form->isValid()) {

			$department = $form->getData();	
			$this->get('department.manager')->save($department);
			return $this->redirect($this->generateUrl('crc_reserv_department_edit',array('id'=>$department->getId())));
		}

		return $this->render('CrcReservBundle:Department:edit.html.twig', array(
			'form' => $form->createView(),
			));
	}

	public function adminAction(Department $department)
	{		
		if( ! $department->isAdmin($this->getUser())) throw new AccessDeniedException();

		$devices = $this->get('device.manager')->getDepartmentDevicesAvailables($department);
		$reservations = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findConfirmedByDepartment($department);

		return $this->render('CrcReservBundle:Department:admin.html.twig', array(
			'devices' => $devices,
			'department' => $department,
			'reservations' => $reservations,
			));
	}

	public function addMemberAction(Department $department)
	{
		if( ! $department->isAdmin($this->getUser())) throw new AccessDeniedException();

		$form = $this->createForm('department_add_member');

		$form->handleRequest($this->getRequest());
		if($form->isValid()) {

			$user = $form->get('user')->getData();
			$department->addMember($user);
			$this->get('department.manager')->save($department);
			$this->get('flashbag')->add("L'utilisateur a été ajouter à : ".$department->getName());

			return $this->redirectToRoute('crc_reserv_department_admin',array('id'=>$department->getId()));

		}

		return $this->render('CrcReservBundle:Department:add_member.html.twig', array(
			'form' => $form->createView(),
			));
	}

	public function removeMemberAction(Department $department, User $user)
	{
		if( ! $department->isAdmin($this->getUser())) throw new AccessDeniedException();

		$department->removeMember($user);
		$department->removeAdmin($user);
		$this->get('department.manager')->save($department);

		return $this->redirectToRoute('crc_reserv_department_admin',array('id'=>$department->getId()));
	}

	public function addAdminAction(Department $department, User $user)
	{
		if( ! $department->isAdmin($this->getUser())) throw new AccessDeniedException();

		$department->addAdmin($user);
		$this->get('department.manager')->save($department);

		return $this->redirectToRoute('crc_reserv_department_admin',array('id'=>$department->getId()));
	}

	public function removeAdminAction(Department $department, User $user)
	{
		if( ! $department->isAdmin($this->getUser())) throw new AccessDeniedException();

		$department->removeAdmin($user);
		$this->get('department.manager')->save($department);

		return $this->redirectToRoute('crc_reserv_department_admin',array('id'=>$department->getId()));
	}

	public function deleteAction(Department $department) 
	{
		$form = $this->createFormBuilder()
				->add('confirm','choice',array(
					'choices' => array(0=>'Non',1=>'Oui'),
					'label' => "Voulez-vous vraiment supprimer définitivement ce département ?",
					'expanded' => true,
					'multiple' => false,
					))
				->add('submit','submit',array(
					'label' => "Supprimer définitivement",
					'attr' => array(
						'class' => "btn btn-warning"
						)
					))
				->getForm();

		$form->handleRequest($this->getRequest());
		if($form->isValid()) {

			$confirm = $form->get('confirm')->getData();
			if( true == $confirm ) {
				$this->get('flashbag')->add('Suppresion effectué !','success');	
				$this->get('department.manager')->deleteDepartment($department);
			} else {
				$this->get('flashbag')->add('Annulation de la suppression...','info');				
			}
			return $this->redirect($this->generateUrl('crc_reserv_home'));
		}

		return $this->render('CrcReservBundle:Department:delete.html.twig', array(
			'form' => $form->createView(),
			));
	}

	public function viewReservationsAction(Department $department) 
	{

		$reservations = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findByDepartment($department);

		return $this->render('CrcReservBundle:Department:view_reservations.html.twig', array(
			'department' => $department,
			'reservations' => $reservations,
			));
	}


	public function createDeviceAction(Department $department, Device $device = null)
	{		
		
		if($device === null) $device = new Device();
		$device->setDepartment($department);		
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
			
			$this->get('flashbag')->add("Vous avez créé ".$quantity." équipements ! ",'success');
			return $this->redirect($this->generateUrl('crc_reserv_device_index',array('department'=>$device->getDepartment()->getId())));
		}
		return $this->render('CrcReservBundle:Device:add.html.twig',array(
			'form' => $form->createView(),
			'department' => $department,
			))
		;
	}

}
