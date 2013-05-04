<?php

class Dashboard_Model extends Model
{

	function __construct(){

	}

	public function run(){

		$sth=$this->db->prepare("SELECT * FROM users ");
		$sth->execute();

		//$data = $sth->fetchAll();
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
