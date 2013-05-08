<?php

class Publicar_Model extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function save(){

		// $this->db->insert("inmueble",array(
		// 		'login'=>'test',
		// 		'password'=>'test',
		// 		'role'=>'test'

		// 	));

		$sth=$this->db->prepare("INSERT INTO inmueble (id_usuario,titulo,descripcion,direccion,tipo,categoria,superficie,precio,departamento) VALUES (?,?,?,?,?,?,?,?,?)");
			$sth->execute(array($_SESSION['id'],$_POST['titulo'],$_POST['descripcion'],
								$_POST['direccion'],strtolower($_POST['tipo']),
								strtolower($_POST['categoria']),$_POST['superficie'],
								$_POST['precio'],strtolower($_POST['departamento'])));



	}

}

 ?>
