<?php  
include("../controllers/sessionturista.php");
include("../controllers/horarioparaturista.php");
?>
<html>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Turista</title>
  <!-- MDB icon -->
  <link rel="icon" href="../img/mdb-favicon.ico" type="image/x-icon">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Google Fonts Roboto -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="../lib/css/bootstrap.min.css">
  <!-- Material Design Bootstrap -->
  <link rel="stylesheet" href="../lib/css/mdb.min.css">
  <!-- Your custom styles (optional) -->
  <link rel="stylesheet" href="../lib/css/style.css">
<head>
  <title></title>
</head>
<body>
<div class="container">
    <!--Navbar -->
    <nav class="mb-1 navbar navbar-expand-lg navbar-dark bg-dark">
      <a class="navbar-brand" href="#">LET´S TRAVEL</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
        aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="guia.php">HOME<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">HORARIOS
            </a>
            <div class="dropdown-menu dropdown-default" aria-labelledby="navbarDropdownMenuLink-333">
              <a class="dropdown-item" href="guiahorario.php">CREAR HORARIOS</a>
              <a class="dropdown-item" href="guiacon.php">VER HORARIOS</a>
            </div>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item">
            <a class="nav-link waves-effect waves-light">
              <i class="fas fa-times" aria-hidden="true" onclick="location.href='../cerrarsession.php';"></i>
            </a>
          </li>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->

 
 Agregar horario
 <form  class="text-center" method="POST" action="../controllers/agregarguia.php"> 


                <div class="table-responsive">
                    </tr>
                       <?php 
                        foreach ($horario as $a):?>
                        <table>
                          <tr>
                            <th>Empleado</th>
                            <th>Dias</th>
                            <th>Lugar</th>
                          </tr>  
                          <tr>
                           <td><input type="" name="empler" id="empler" e value="<?php echo $a['id_usuario']?>"></td>
                           <td><?php echo $a['dias']?></td>
                           <td><?php echo $a['lugares']?></td>
                           <td>  <!-- Button to Open the Modal -->                                        <button type="button" class="btn btn-primary" onclick="square('<?php echo $a['id_usuario']?>')" id="empleado">Ver Mas</button></td> 
                          </tr>
                        </table>
                        <br>
                        <br>
                        <?php
                         endforeach;
                        ?>
                </div>  

<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">GUIA</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        
        <div class="modal-body">
            <button type='submit' id='agregar' id='agregar' class='btn btn-primary'>Agregar</button>
          <div id="resultado"></div>
        </div>
         <span id="rateMe2"  class="empty-stars"></span>
        <table><tr><td><input type='text' name='addcoment' id='addcoment'></td><td><button type='button' id='enviacomen' class='btn btn-primary'>Enviar</button></td></tr></table>
        <!-- Modal footer -->
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        </div>
        
      </div>
    </div>
  </div>

          </form>
</body>
<script type="text/javascript" src="../lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../lib/js/mdb.min.js"></script>
  <script type="text/javascript" src="../js/comentarios.js"></script>
  <script type="text/javascript" src="../lib/js/addons/rating.min.js"></script>
  <script type="text/javascript" src="../js/estrellas.js"></script>
  <script type="text/javascript">
    $('#materialIndeterminate2').prop('indeterminate', true);
  </script>


<script type="text/javascript">
function square(id) {
  $('#idHide').val(id);
  $('#myModal').modal('show')
        var parametros = {
        'id':id,
        'request':'data',
        };
        
      $.ajax({
        data: parametros,
        url:'../controllers/modal.php',
        type:'POST',
        beforeSend: function () {
            },
        success:  function (response) {
          document.getElementById('resultado').innerHTML = response;
          $("#idempleado").val("")
        }
        });
 }
</script>


<style type="text/css">
  p.clasificacion {
  position: relative;
  overflow: hidden;
  display: inline-block;
}

p.clasificacion input {
  position: absolute;
  top: -100px;
}

p.clasificacion label {
  float: right;
  color: #333;
}

p.clasificacion label:hover,
p.clasificacion label:hover ~ label,
p.clasificacion input:checked ~ label {
  color: #dd4;
}clip-path: 
</style>
</html>
