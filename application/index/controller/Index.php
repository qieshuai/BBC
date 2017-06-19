<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Validate;
use think\Session;
use think\Hook;

use app\index\model\User;
use app\index\model\Lists;
class Index extends Controller
{

	// private $path='/MessageBoard/public';
	public function check(){
		if(!Session::has('name')){
			Hook::listen('CheckAuth',$params);
		}	
	}

	public function login(){
		if(Session::has('name')){
			$name=Session::get('name');
		}else{
			$name=null;
		}
		$this->assign('name',$name);
	}
	public function index(){
		$this->login();
		return $this->fetch();
	}

	public function out(){
		Session::clear();
		return $this->success('退出成功',$this->path);
	}
}
