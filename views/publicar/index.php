<form action="publicar/save" method="post">
	titulo
	<input type="text" name="titulo"><br>
	descripcion
	<!-- <textarea cols="40" rows="5" name="myname"><br> -->
	<textarea rows="4" cols="50" name="descripcion">

	</textarea><br>
	Tipo de Vivienda:
	<select name="vivienda">
		<option value="sel" selected=selected>Seleccione..</option>
	  <option value="casa">Casa</option>
	  <option value="departament">Departamento</option>
	  <option value="oficina">Oficina</option>
	  	  <option value="local">Local comercial</option>
	  <option value="terreno">Terreno</option>
	  <option value="quinta">Quinta y propiedades</option>
	</select><br>
	Departamento:
	<select name="ciudad">
		<option value="sel" selected=selected>Seleccione..</option>
	  <option value="lp">La Paz</option>
	  <option value="or">Oruro</option>
	  <option value="po">Potosi</option>
	  	  <option value="chu">Chuquisaca</option>
	  <option value="co">Cochabamba</option>
	  <option value="ta">Tarija</option>
	  	  <option value="pa">Pando</option>
	  <option value="be">Beni</option>
	  <option value="sa" >Santa Cruz</option>

	</select><br>
	Oferta:
	<select name="oferta">
		<option value="sel" selected=selected>Seleccione..</option>
	  <option value="venta">Venta</option>
	  <option value="alquiler">Alquiler</option>
	  <option value="anticretico">Anticretico</option>

	</select><br>
	<input type="file" name="pic1" accept="image/*"/><br>
	<input type="file" name="pic2" accept="image/*"/><br>
	<input type="file" name="pic3" accept="image/*"/>
	Direccion:
	<input type="text" name="titulo"><br>
	Superficie:
	<input type="text" name="titulo"><br>
	Precio:
	<input type="text" name="titulo"><br>
	<input type="submit">
</form>
