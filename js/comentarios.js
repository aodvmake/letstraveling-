$(document).ready(function(){
	$("#enviacomen").click(function(){
		var addcoment = $("#addcoment").val()
		var rateMe2 = $("#rateMe2").val()

			var parametros = {
				'addcoment':addcoment,
				'rateMe2':rateMe2,
				'request':'data',
			};
			alert(rateMe2);
			$.ajax({
				data: parametros,
				url:'../controllers/comentarios.php',
				type:'POST',
				beforeSend: function () {
		        },
				success:  function (response) {
					alert(response);
					$("#correo").val("")
					$("#pass").val("")
				}
			});
		});
	});