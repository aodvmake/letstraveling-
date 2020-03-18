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

    <link rel="icon" type="image/png" href="../lib/img/icono.png">
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
            <a class="nav-link" href="turista.php">HOME<span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href=""></a>
          </li>
        </ul>
        <ul class="navbar-nav ml-auto nav-flex-icons">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              <i class="fas fa-user"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-right dropdown-default"
              aria-labelledby="navbarDropdownMenuLink-333">
             <a class="dropdown-item" href="#" onclick="location.href='../cerrarsession.php';">SALIR</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->

    <div class="content">
      <div class="card-body px-lg-1 pt-0">
        <h2>Agregar horario</h2>
<form  class="text-center" method="POST" action="../controllers/agregarguia.php"> 
    <div class="table-responsive">
      <?php 
        foreach ($horario as $a):?>
          <table class="table">
            <tr class="text-center">
             <th scope="col">Empleado</th>
             <th scope="col">Dias</th>
             <th scope="col">Lugar</th>
            </tr>  
             <tr>
              <td><input class="form-control form-control-sm" type="" name="empler" id="empler" e value="<?php echo $a['id_usuario']?>"></td>
              <td><?php echo $a['dias']?></td>
              <td><?php echo $a['lugares']?></td>
              <!-- Button to Open the Modal -->
              <td><button type="button" class="btn btn-primary" onclick="square('<?php echo $a['id_usuario']?>')" id="empleado"><i class="fas fa-eye"></i></button></td> 
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
        <div class="row">
          <div class="col-5">
            <img src="../lib/img/img3.jpeg"
              class="img-fluid" alt="">
          </div>

          <div class="col-7">
          <p><strong>DESEA AGREGAR TURISTA?</strong></p>     
          <button type='submit' id='agregar' id='agregar'   class="btn btn-pink"><i class="fas fa-plane pr-2" aria-hidden="true"></i>AGTREGAR</button>
          <div id="resultado"></div>
                   <span id="rateMe2"  class="empty-stars"></span>
          <div class="md-form">
            <input class="form-control" type='text' name='addcoment' id='addcoment'>
            <label for="numberExample">COMENTARIO</label>
          </div>
              <button type='button' id='enviacomen' class='btn btn-primary'><i class="far fa-envelope"></i></button>
          </div>

        </div>
        </div>        
      </div>
    </div>
  </div>
</form>

      </div>    

     <div class="bannerImg">
      <img src="../lib/img/img3.jpeg">
     </div>
    </div> 

 










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