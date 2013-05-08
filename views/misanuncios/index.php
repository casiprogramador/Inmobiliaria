<table border="1">
	<tr>
		<th>Nro</th>
		<th>Titulo</th>
		<th>Direccion</th>
		<th>Precio</th>
		<th>Departamento</th>
		<th>Opciones</th>
	</tr>
<?php

	foreach ($this->anuncios as $key => $value) {


		echo '<tr>';
			echo '<td>'.$value['id'].'</td>';
			echo '<td>'.$value['titulo'].'</td>';
			echo '<td>'.$value['direccion'].'</td>';
			echo '<td>'.$value['precio'].'</td>';
			echo '<td>'.$value['departamento'].'</td>';
			echo '<td>
					<a href="misanuncios/editar/'.$value['id'].'">
						<img src="views/misanuncios/img/edit.png" alt="Editar">
					<a/>
					<a href="#">
						<img src="views/misanuncios/img/delete.png" alt="Editar">
					<a/>
					<a href="#"><img src="views/misanuncios/img/message.png" alt="Editar"><a/>
				  </td>';

		echo '</tr>';

	}



 ?>
</table>
