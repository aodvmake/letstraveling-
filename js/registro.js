$(document).ready(function(){
	$("#enviar").click(function(){
		var correo = $("#correo").val()
		var pass = $("#pass").val()
		var telefono=$("#telefono").val()
        var fecha=$("#fecha").val()
        var idioma=$("#idioma").val()

			var parametros = {
				'correo':correo,
				'pass':pass,
				'telefono':telefono,
				'fecha':fecha,
				'idioma':idioma,
				'request':'data',
			};
			$.ajax({
				data: parametros,
				url:'controllers/registrotu.php',
				type:'POST',
				beforeSend: function () {
		        },
				success:  function (response) {
					alert(response);
					$("#correo").val("")
					$("#pass").val("")
					$("#telefono").val("")
					$("#fecha").val("")
				}
			});
		});
	});