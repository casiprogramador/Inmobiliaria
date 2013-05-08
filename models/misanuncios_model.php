<?php

class Misanuncios_Model extends Model{

	public function __construct(){
		parent::__construct();
	}

	public function recover(){
			$sth=$this->db->prepare("SELECT id,titulo,direccion,precio,departamento FROM inmueble WHERE id_usuario = ?");
			$sth->execute(array($_SESSION['id']));

			return $sth->fetchAll();
	}

	public function edit($id){
		$sth=$this->db->prepare("SELECT titulo,descripcion,direccion,tipo,categoria,superficie,precio,departamento FROM inmueble WHERE id = ?");
			$sth->execute(array($id));

			return $sth->fetch(PDO::FETCH_ASSOC);
	}

}

 ?>
