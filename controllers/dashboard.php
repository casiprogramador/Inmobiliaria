<?php

class Dashboard extends Controller{
	function __construct(){
		parent::__construct();
		Session::Init();
		//echo $_SESSION['id'];
		$logged = Session::get('loggedIn');
		if($logged == false){
			Session::destroy();
			header('location: '.URL.'/login');
			exit;
		}

	}

	function index(){

		$this->view->render('dashboard/index');
	}

	function logout(){
		Session::destroy();
		header('location: ../login');
		exit;
	}


}

 ?>
