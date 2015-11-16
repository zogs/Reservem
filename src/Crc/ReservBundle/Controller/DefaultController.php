<?php

namespace Crc\ReservBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

use Crc\ReservBundle\Entity\Device;

class DefaultController extends Controller
{
	public function indexAction()
	{
		$dpts = $this->getDoctrine()->getManager()->getRepository('CrcReservBundle:Department')->findAll();

		return $this->render('CrcReservBundle:Default:accueil.html.twig', array(
			'departments' => $dpts
			));
	}

}
