<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Validate;
use think\Session;
use think\Hook;

use app\index\model\User;
use app\index\model\Lists;
class Material extends Index
{
	public function command(){
		$this->login();
		return $this->fetch();
	}

	public function album3D(){
		$this->login();
		return $this->fetch();
	}
}
