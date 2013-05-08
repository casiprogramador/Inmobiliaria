<?php

 if (isset($this->id)) {
 	$data=$this->id;
 }else{
 	$data=null;
 }

 ?>
<form action="publicar/save" method="post" enctype="multipart/form-data">
	titulo
	<input type="text" name="titulo" value="<?php echo $data['titulo'] ?>"  ><br>
	descripcion
	<!-- <textarea cols="40" rows="5" name="myname"><br> -->
	<textarea rows="4" cols="50" name="descripcion" >
		<?php echo $data['descripcion'] ?>
	</textarea><br>
	Tipo de Vivienda:
	<select name="tipo">
		<option value="sel" selected=selected>Seleccione..</option>
	  <option value="Casa">Casa</option>
	  <option value="Departamento">Departamento</option>
	  <option value="Oficina">Oficina</option>
	  	  <option value="Local">Local comercial</option>
	  <option value="Terreno">Terreno</option>
	  <option value="Otros">Otros</option>
	</select><br>
	Departamento:
	<select name="departamento">
		<option value="sel" selected=selected>Seleccione..</option>
	  <option value="la paz">La Paz</option>
	  <option value="oruro">Oruro</option>
	  <option value="potosi">Potosi</option>
	  	  <option value="chuquisaca">Chuquisaca</option>
	  <option value="cochabamba">Cochabamba</option>
	  <option value="tarija">Tarija</option>
	  	  <option value="pando">Pando</option>
	  <option value="beni">Beni</option>
	  <option value="santa cruz" >Santa Cruz</option>

	</select><br>
	Oferta:
	<select name="categoria">
		<option value="sel" selected=selected>Seleccione..</option>
	  <option value="venta">Venta</option>
	  <option value="alquiler">Alquiler</option>
	  <option value="anticretico">Anticretico</option>
	  <option value="traspaso">Traspaso</option>
	  <option value="anticretico">Otros</option>

	</select><br>
	<input type="file" name="pic1" accept="image/*"/><br>
	<input type="file" name="pic2" accept="image/*"/><br>
	<input type="file" name="pic3" accept="image/*"/><br>
	Direccion:
	<input type="text" name="direccion" value="<?php echo $data['direccion'] ?>"><br>
	Superficie:
	<input type="text" name="superficie" value="<?php echo $data['superficie'] ?>"><br>
	Precio:
	<input type="text" name="precio" value="<?php echo $data['precio'] ?>"><br>
	<input type="submit">
</form>
