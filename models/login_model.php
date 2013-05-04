<?php

class Login_Model extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function run(){

		$sth=$this->db->prepare("SELECT id FROM usuario WHERE correo = :correo AND password = :password");
		$sth->execute(array(
			':correo' => $_POST['correo'],
			':password' => $_POST['password']
			));


		$count= $sth->rowCount();
		if($count>0){
			Session::init();
			Session::set('loggedIn',true);
			header('location: ../dashboard');
		}else{
			header('location: ../login');
		}

	}

}

 ?>
