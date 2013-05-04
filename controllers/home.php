<?php

class Home extends Controller{
	function __construct(){
		parent::__construct();
	}

	public function other(){


	}

	public function index(){

		$this->view->render('home/index');
	}



}

 ?>
