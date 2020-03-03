<html>
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Registro Turista</title>
  <!-- MDB icon -->
  <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="lib/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="lib/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="lib/css/style.css">

	<title></title>
</head>
<body>
  <form method="POST" action="">
      <div class="md-form form-lg">
         <input type="email" class="form-control form-control-lg" name="correo" id="correo">
         <label for="correo">Correo</label>
      </div>
      <div class="md-form form-lg">
         <input type="password" class="form-control form-control-lg" name="pass" id="pass">
         <label for="pass">Password</label>
      </div>
      <div class="md-form form-lg">
         <input type="text" class="form-control form-control-lg" name="telefono" id="telefono" onkeypress="return soloNumeros(event);">
         <label for="telefono">Telefono</label>
      </div>
      <div class="md-form form-lg">
         <input type="text" class="form-control form-control-lg" name="domicilio" id="domicilio">
         <label for="domicilio">Domicilio</label>
      </div>
      <div class="md-form form-lg">
         <input type="text" class="form-control form-control-lg" name="colonia" id="colonia">
         <label for="colonia">Colonia</label>
      </div>
      <div class="md-form form-lg">
         <input type="text" class="form-control form-control-lg" name="ndomicilio" id="ndomicilio" onkeypress="return soloNumeros(event);">
         <label for="foto">Num.Domicilio</label>
      </div>
      <div class="md-form form-lg">
         <input type="text" class="form-control form-control-lg" name="rfc" id="rfc">
         <label for="rfc">RFC</label>
      </div>
      <div class="md-form form-lg">
         <input type="text" class="form-control form-control-lg" name="curp" id="curp">
         <label for="curp">CURP</label>
      </div>
      <div class="md-form form-lg">
         <input type="text" class="form-control form-control-lg" name="estado" id="estado">
         <label for="estado">Estado</label>
      </div>
      <div class="md-form form-lg">
         <input type="text" class="form-control form-control-lg" name="municipio" id="municipio">
         <label for="Municipio">Municipio</label>
      </div>
      <div class="md-form form-lg">
         <input type="date"  class="form-control form-control-lg" name="fecha" id="fecha">
         <label for="fecha">Fecha de nacimiento</label>
      </div>
      <div class="md-form form-lg">
      <select name="idioma" id="idioma">
            <?php foreach ($idiomas as $a): ?>
                <option value="<?php echo $a['id_idioma']?>"><?php echo $a['nombre']?></option>
            <?php endforeach; ?>
      </select> 
      </div>             
        <p><button type="submit" name="enviar" id="enviar">Registrar</button></p>
  </form>
  <script type="text/javascript" src="lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="lib/js/mdb.min.js"></script>
  <script type="text/javascript" src="js/controlador.js"></script>
  <script type="text/javascript">
    function soloNumeros(e)
{
var keynum = window.event ? window.event.keyCode : e.which;
if ((keynum == 8) || (keynum == 46))
return true;
return /\d/.test(String.fromCharCode(keynum));
}
  </script>
  <script type="text/javascript" src>"numeros.js"</script>
</body>
</html>