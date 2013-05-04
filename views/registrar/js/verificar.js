$(document).ready(function () {
	$('form').submit(function(){

		$.post('registrar/save',$('form').serialize(),function(data){
			if (data==1) {
				$('#form').html('<p>Revise su correo para confirmar</p>')
			}else{
				$('#aviso').html('<p>Correo ya ingresado</p>')
			}
		});
		return false;
	});
});
