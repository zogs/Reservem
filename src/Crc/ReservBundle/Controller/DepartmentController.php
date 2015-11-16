<?php

namespace Crc\ReservBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Finder\Exception\AccessDeniedException;

use Crc\ReservBundle\Entity\Department;
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

		$reservations = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Reservation')->findConfirmedByDepartment($department);

		return $this->render('CrcReservBundle:Department:view_reservations.html.twig', array(
			'department' => $department,
			'reservations' => $reservations,
			));
	}

}
