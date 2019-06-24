$(document).ready(function(){
	$('#formularioContacto').submit(function(e){
		e.preventDefault();

		var nombres=$('#txtNombres').val();
		var email=$('#txtEmail').val();
		var mensaje=$('#txtMensaje').val();
		var datos  = new  FormData();
		datos.append("enviarMensaje","enviarMensaje");
		datos.append("nombres",nombres);
		datos.append("email",email);
		datos.append("mensaje",mensaje);
		$.ajax({
			url:"Ajax/email.ajax.php",
			method:"POST",
			data: datos,
			cache: false,
			contentType: false,
			processData: false,
			beforeSend: function() {
		        $('#btnEnviarCorreo').attr("disabled", true);
		    },
			success: function(data){
				console.log(data);
				var html="";
				if(data==1){
					html+='<div class="alert alert-dismissible alert-success respuestaMensaje">';
        			html+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
        			html+='<strong>Mensaje Enviado!</strong> Su mensaje fue enviado correctamente</div>';
        			$('#txtNombres').val("");
					$('#txtEmail').val("");
					$('#txtMensaje').val("");
				}else{
					html=data;
				}

				$('#respuestaMensaje').html(html);
				$('#btnEnviarCorreo').attr("disabled", false);
			}
		});	
	});
});