<?php
namespace app\index\controller;
use think\Controller;
use think\Db;
use think\Validate;
use think\Session;
use think\Hook;

use app\index\model\User;
use app\index\model\Lists;
use app\index\model\Pass;
class Index extends Controller
{
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
			return $this->redirect('/BBC/public/login');
			// return $this->error('请先登录','/BBC/public/login','',-1);
		}
		$this->assign('name',$name);
	}
	public function index(){
		$this->login();
		return $this->fetch();
	}

	public function out(){
		Session::clear();
		return $this->success('退出成功','/BBC/public/login');
	}

	// demo website
	 public function demo(){
		$this->login();
		return $this->fetch();
	}
	public function r404()
		    {
		    	return $this->fetch('404');
		    }
		public function r500()
		    {
		    	return $this->fetch('500');
		    }
		public function advanced()
		    {
		    	return $this->fetch();
		    }
		public function blank()
		    {
		    	return $this->fetch();
		    }
		public function boxed()
		    {
		    	return $this->fetch();
		    }
		public function buttons()
		    {
		    	return $this->fetch();
		    }
		public function calendar()
		    {
		    	return $this->fetch();
		    }
		public function chartjs()
		    {
		    	return $this->fetch();
		    }
		public function collapsed_sidebar()
		    {
		    	return $this->fetch();
		    }
		public function compose()
		    {
		    	return $this->fetch();
		    }
		public function data()
		    {
		    	return $this->fetch();
		    }
		public function editors()
		    {
		    	return $this->fetch();
		    }
		public function fixed()
		    {
		    	return $this->fetch();
		    }
		public function flot()
		    {
		    	return $this->fetch();
		    }
		public function general()
		    {
		    	return $this->fetch();
		    }
		public function icons()
		    {
		    	return $this->fetch();
		    }
		/*public function index()
		    {
		    	return $this->fetch();
		    }*/
		public function blog()
		    {
		    	$this->login();
		    	return $this->fetch();
		    }
		public function inline()
		    {
		    	return $this->fetch();
		    }
		public function invoice_print()
		    {
		    	return $this->fetch();
		    }
		public function invoice()
		    {
		    	return $this->fetch();
		    }
		public function lockscreen()
		    {
		    	$this->login();
		    	return $this->fetch();
		    }

		public function lock($user_passwd=''){
			$user_name=Session::get('name');
			$user=Pass::get([
					'user_name' => $user_name,
					'UserPassward' => $user_passwd
				]);
			if($user){
				return $this->success('登录成功！','/BBC/public');
			}else{
				return $this->error('密码不正确');
			}		
		}
		/*public function login()
		    {
		    	return $this->fetch();
		    }*/
		public function mailbox()
		    {
		    	return $this->fetch();
		    }
		public function modals()
		    {
		    	return $this->fetch();
		    }
		public function morris()
		    {
		    	return $this->fetch();
		    }
		public function pace()
		    {
		    	return $this->fetch();
		    }
		public function profile()
		    {
		    	$this->login();
		    	return $this->fetch();
		    }
		public function read_mail()
		    {
		    	return $this->fetch();
		    }
		public function register()
		    {
		    	return $this->fetch();
		    }
		public function simple()
		    {
		    	return $this->fetch();
		    }
		public function sliders()
		    {
		    	return $this->fetch();
		    }
		public function starter()
		    {
		    	return $this->fetch();
		    }
		public function timeline()
		    {
		    	return $this->fetch();
		    }
		public function top_nav()
		    {
		    	return $this->fetch();
		    }
		public function ui_general()
		    {
		    	return $this->fetch();
		    }
		public function widgets()
		    {
		    	return $this->fetch();
		    }
}
