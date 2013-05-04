<?php

class Registrar_Model extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function save(){



		if (($this->test($_POST['correo']))>0) {
			return false;
		}else{
			$sth=$this->db->prepare("INSERT INTO usuario (nombre,apellido,telefono,correo,password) VALUES (:nombre,:apellido,:telefono,:correo,:password)");
			$sth->execute(array(
			':nombre'=> $_POST['nombre'],
			':apellido'=> $_POST['apellido'],
			':telefono' => $_POST['telefono'],
			':correo' => $_POST['correo'],
			':password' => md5($_POST['password'])
			));
			return true;

		}

	}

	public function test($correo){
		$sth=$this->db->prepare('SELECT id,nombre FROM usuario WHERE correo  = ?');
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute(array($correo));
		return $sth->rowCount();
	}

}

 ?>
