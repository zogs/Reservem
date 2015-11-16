<?php

namespace Crc\ReservBundle\Manager;

use Zogs\ManagerBundle\Manager\AbstractManager;

use Crc\ReservBundle\Entity\Department;
use Zogs\UserBundle\Entity\User;

class DepartmentManager extends AbstractManager
{
	protected $em;

	public function isAdmin(Department $dpt, User $user = null)
	{
		if(null == $user) return false;
		if($dpt->isAdmin($user)) return true;
		return false;

	}

	public function deleteDepartment(Department $department) 
	{
		$this->delete($department,true);
	}
}
?>