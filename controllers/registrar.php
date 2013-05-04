<?php

class Registrar extends Controller{
	function __construct(){
		parent::__construct();
		$this->view->js = array('registrar/js/verificar.js');
	}

	function index(){

		$this->view->render('registrar/index');
	}

	function save(){


		if ($this->model->save()) {
			echo 1;
		}else{
			echo 0;
		}

	}

	function test(){

	}
}


 ?>
