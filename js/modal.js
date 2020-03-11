$(document).ready(function(){
	$("#empleado").click(function(){
		var idempleado = $("#empleado").val()
             var parametros = {
				'empleado':idempleado,
				'request':'data',
				};
			$.ajax({
				data: parametros,
				url:'../controllers/modal.php',
				type:'POST',
				beforeSend: function () {
		        },
				success:  function (response) {
					alert(response);
					$("#idempleado").val("")
				}
			});
		});
	});