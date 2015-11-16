<?php

namespace Zogs\MailerBundle\Manager;

use Zogs\ManagerBundle\Manager\AbstractManager;
use Zogs\MailerBUndle\Entity\Settings;

class SettingsManager extends AbstractManager
{
	protected $em;
	protected $user;

	public function setUser()
	{
		$this->user = $user;
	}


	public function saveSettings($settings)
	{		
		
		$this->save($settings,true);
		return true;	
	}	

	
}
?>