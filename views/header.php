<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>BuscoCasa</title>
	<link rel="stylesheet" href="<?php echo URL; ?>public/css/normalize.css">
	<link rel="stylesheet/less" type="text/css" href="<?php echo URL; ?>public/css/style.less" />
	<script src="<?php echo URL; ?>public/js/less-1.3.3.min.js" type="text/javascript"></script>
	<script src="<?php echo URL; ?>public/js/jquery.js" type="text/javascript"></script>
	<?php

	if(isset($this->js)){
		foreach ($this->js as $js) {
			echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
		}
	}

	 ?>
</head>
<body>
	<?php Session::init(); ?>
	<div id="body">
		<div id="header">
			<header>
				<div id="logo">
					<img src="<?php echo URL; ?>public/img/dondevivo.png" alt="logotipo" >
				</div>
				<div id="log">
					<?php if (Session::get('loggedIn')==true): ?>
						<a href="<?php echo URL; ?>dashboard/logout">
							Logout
						</a>
					<?php else: ?>
						<a href="<?php echo URL; ?>login">
							Login
						</a>
						<a href="<?php echo URL; ?>registrar">
							Registrarse
						</a>
					<?php endif; ?>
				</div>
			</header>
		</div>
		<div id="menu">
			<ul>
				<li><a href="home">Inicio</a></li>
				<li><a href="#">Venta</a></li>
				<li><a href="#">Compra</a></li>
				<li><a href="#">Contacto</a></li>
				<li><a href="#">Publicar</a></li>
			</ul>
		</div>
		<div id="content">





