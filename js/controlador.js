$(document).ready(function(){
	$("#enviar").click(function(){
		var correo = $("#correo").val()
		var pass = $("#pass").val()
		var telefono=$("#telefono").val()
        var domicilio=$("#domicilio").val()
        var colonia=$("#colonia").val()
        var ndomicilio=$("#ndomicilio").val()
        var rfc=$("#rfc").val()
        var curp=$("#curp").val()
        var estado=$("#estado").val()
        var municipio=$("#municipio").val()
        var fecha=$("#fecha").val()
        var idioma=$("#idioma").val()

			var parametros = {
				'correo':correo,
				'pass':pass,
				'telefono':telefono,
				'domicilio':domicilio,
				'colonia':colonia,
				'ndomicilio':ndomicilio,
				'rfc':rfc,
				'curp':curp,
				'estado':estado,
				'municipio':municipio,
				'fecha':fecha,
				'idioma':idioma,
				'request':'data',
			};
			$.ajax({
				data: parametros,
				url:'controllers/campos.php',
				type:'POST',
				beforeSend: function () {
		        },
				success:  function (response) {
					alert(response);
					$("#correo").val("")
					$("#pass").val("")
					$("#telefono").val("")
					$("#domicilio").val("")
					$("#colonia").val("")
					$("#ndomicilio").val("")
					$("#rfc").val("")
					$("#curp").val("")
					$("#estado").val("")
					$("#municipio").val("")
					$("#fecha").val("")
					$("#idioma").val("")
				}
			});
		});
	});
