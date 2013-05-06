<?php

class Login_Model extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function run(){

		if(isset($_POST['correo']) and isset($_POST['password'])  ){

			$sth=$this->db->prepare("SELECT id FROM usuario WHERE correo = :correo AND password = :password");
			$sth->execute(array(
				':correo' => $_POST['correo'],
				':password' => md5($_POST['password'])
				));


			$count= $sth->rowCount();
			if($count>0){
				Session::init();
				Session::set('loggedIn',true);
				$row=$sth->fetch(PDO::FETCH_ASSOC);
				$_SESSION['id'] = $row['id'];

				header('location: ../dashboard');
			}else{

				header('location: ../login');
			}
		}else{
			header('location: ../login');
		}
	}

}

 ?>
