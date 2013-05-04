<?php

class Publicar extends Controller{
	function __construct(){
		parent::__construct();
		Session::init();
		$logged = Session::get('loggedIn');
		if($logged == false){

			header('location: '.URL.'/login');
			exit;
		}

	}

	function index(){

		$this->view->render('publicar/index');
	}


	function save(){
		mkdir("img/1", 0777);
		chmod("img/1", 0777);

	}





}

 ?>
