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
		Session::Init();
		$this->create_file($_SESSION['id']);
		$ruta='img/'.$_SESSION['id'].'/';
		$imagen=$_FILES['pic1'];
		//print_r($imagen);
		move_uploaded_file($_FILES['pic1']['tmp_name'],$ruta.$_FILES['pic1']['name']);



	}


	function create_file($id){

		if (file_exists('img/'.$id)) {
			echo 'file exist';
		}else{
			mkdir("img/".$id, 0777);
			chmod("img/".$id, 0777);

		}


	}





}

 ?>
