$(document).ready(function(){
	$("#enviacomen").click(function(){
		var addcoment = $("#addcoment").val()
		var rating = 0;
		if ($('.oneStar').length!=0){
			rating = 1;
		}
		if ($('.twoStars').length!=0){
			rating = 2;
		}
		if ($('.threeStars').length!=0){
			rating = 3;
		}
		if ($('.fourStars').length!=0){
			rating = 4;
		}
		if ($('.fiveStars').length!=0){
			rating = 5;
		}
		
			var parametros = {
				'addcoment':addcoment,
				'rating':rating,
				'request':'data',
			};
			
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