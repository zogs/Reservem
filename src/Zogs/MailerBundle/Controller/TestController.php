<?php

namespace Zogs\MailerBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TestController extends Controller
{
	public function sendTestMailAction(Request $request)
	{
		if($request->query->has('email')){
			$email = $request->query->get('email');
		} else {
			$email = $this->container->getParameter('mailer.emails.debug')[0];
		}

		$mailer = $this->container->get('z_mailer');
		
		if($mailer->sendTestMessage($email)){
			$this->container->get('flashbag')->add("Email de test envoyé à ".$email.". <a href='".$this->generateUrl('zogs.mailer.test')."'>Recommencer</a>",'success');
		} else {

			$mailLogger = new \Swift_Plugins_Loggers_ArrayLogger();
        	$mailer->registerPlugin(new \Swift_Plugins_LoggerPlugin($mailLogger));
			$this->container->get('flashbag')->add("Echec du test... <a href='".$this->generateUrl('zogs.mailer.test')."'>Recommencer</a> <br/> ".$mailerLogger->dump(),'error');
		}


		return $this->redirect($this->generateUrl('homepage'));
	}
    
}
