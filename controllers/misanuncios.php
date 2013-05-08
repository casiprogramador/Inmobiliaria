<?php

class Misanuncios extends Controller{
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
		Session::Init();
		$this->view->anuncios = $this->model->recover();
		$this->view->render('misanuncios/index');
	}

	function editar($id){
		$this->view->id = $this->model->edit($id);
		$this->view->call('publicar/index');
		//$this->model->edit($id);
	}




}

 ?>
