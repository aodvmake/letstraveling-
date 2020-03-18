function square(id) {
  $('#idHide').val(id);
        var parametros = {
        'id':id,
        'request':'data',
        };
      
      $.ajax({
        data: parametros,
        url:'../controllers/kingeliminarguia.php',
        type:'POST',
        beforeSend: function () {
            },
        success:  function (response) {
          $("#id").val("")
        }
        });
 }