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
  <title>LET´S TRAVEL</title>
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
              <a class="dropdown-item" href="guiahorario.php">CREAR HORARIO</a>
              <a class="dropdown-item" href="guiacon.php">VER HORARIOS</a>
            </div>
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
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#" onclick="location.href='../cerrarsession.php';">SALIR</a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
    <!--/.Navbar -->

<<<<<<< HEAD
<div class="content">
  <div class="card-body px-lg-1 pt-0">
   <h2>AGREGAR HORARIO</h2> 
     <form  class="text-center" method="POST"> 
       <div class="table-responsive">
           <table class="table">
             <tr>
              <th scope="col">DÍA</th>
              <th scope="col">HORA DE INICIO</th>
              <th scope="col">HORA DE FIN</th>
             </tr>
              <?php foreach ($horario as $a): ?>
                <tr>
                  <td><?php echo $a['dia']?></td>
                  <td><?php echo $a['horarioi']?></td>
                  <td><?php echo $a['horariof']?></td>
                </tr>
              <?php endforeach; ?>        
           </table>
       </div>  
    </form>
  </div> 



</div>

=======
 
 Agregar horario
 <form  class="text-center" method="POST"> 
>>>>>>> 6275af954d052bdcba56cf42a0f2069839d1c081


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
                           <td><?php echo $a['id_usuario']?></td>
                           <td><?php echo $a['dias']?></td>
                           <td><?php echo $a['lugares']?></td>
                           <td>  <!-- Button to Open the Modal -->
                           <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal" id="empleado" value="<?php echo $a['id_usuario']?>">Ver Mas</button></td>
                          </tr>
                        </table>
                        <br>
                        <br>
                        <?php
                         endforeach;
                        ?>
                </div>  
<<<<<<< HEAD

=======
>>>>>>> 6275af954d052bdcba56cf42a0f2069839d1c081

<!-- The Modal -->
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
      
        <!-- Modal Header -->
        <div class="modal-header">
          <h4 class="modal-title">Modal Heading</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        
        <!-- Modal body -->
        <div class="modal-body">
          Modal body..
        </div>
        
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
  <script type="text/javascript">
    $('#materialIndeterminate2').prop('indeterminate', true);
  </script>
  <script type="text/javascript" src="../js/modal.js"></script>
</html>