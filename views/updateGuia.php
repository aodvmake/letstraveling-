<?php 
include("../controllers/session.php");
?>
 <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Guia</title>

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
                <a class="dropdown-item" href="updateGuia.php">CONFIGURACIÓN</a>
                <a class="dropdown-item" href="#">Action</a>
                <a class="dropdown-item" href="#" onclick="location.href='../cerrarsession.php';">SALIR</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!--/.Navbar -->

      <div class="content">
        <div class="card-body px-lg-5 pt-0">
            <h2>ACTUALIZAR MI INFORMACIÓN</h2>
             <form method="POST" action="../controllers/actualizar.php">

              <table  class="table table-borderless">
                <tr>
                <td>
                  <div class="row">
                    <div class="col">
                      <div class="md-form">
                        <input class="form-control" type="password" name="pass" id="pass">
                        <label for="pass">Password</label>
                      </div>      
                    </div>
                  </div>
                </td>
                <td>
                <button type="submit" class="btn aqua-gradient px-3" name="actpass" id="actpass"><i class="fas fa-sync-alt" aria-hidden="true"></i></button> 
                </td>
                <tr>  
                <td>
                  <div class="row">
                    <div class="col">
                      <div class="md-form">
                        <input class="form-control" type="text" name="telefono" id="telefono" onkeypress="return soloNumeros(event);">
                        <label for="telefono">Telefono</label>
                      </div>      
                    </div>
                  </div>
                </td>
                <td>
                <button type="submit" class="btn aqua-gradient px-3" name="actphone" id="actphone"><i class="fas fa-sync-alt" aria-hidden="true"></i></button> 
                </td>  
                <tr>
                <td>
                  <div class="row">
                    <div class="col">
                      <div class="md-form">
                        <input class="form-control" type="text"  name="domicilio" id="domicilio">
                        <label for="domicilio">Calle</label>
                      </div>      
                    </div>
                  </div>
                </td>
              <td>
                <button type="submit" class="btn aqua-gradient px-3" name="actdomi" id="actdomi"><i class="fas fa-sync-alt" aria-hidden="true"></i></button>
              </td>  
              </tr>
                <td>
                  <div class="row">
                    <div class="col">
                      <div class="md-form">
                        <input class="form-control" type="text" name="colonia" id="colonia">
                        <label for="colonia">Colonia</label>
                      </div>      
                    </div>
                  </div>
                </td>
                <td>
                <button type="submit" class="btn aqua-gradient px-3" name="actcol" id="actcol"><i class="fas fa-sync-alt" aria-hidden="true"></i></button>
                </td> 
              </tr>
              <tr>
                <td>
                  <div class="row">
                    <div class="col">
                      <div class="md-form">
                        <input class="form-control" type="text"  name="ndomicilio" id="ndomicilio" onkeypress="return soloNumeros(event);">
                        <label for="foto">#</label>              
                      </div>      
                    </div>
                  </div>
                <td>
                  <button class="btn aqua-gradient px-3" type="submit" name="actndom" id="actndom"><i class="fas fa-sync-alt" aria-hidden="true"></i></button>  
                </td> 
              </tr>  
              <tr>
                <td>
                  <div class="row">
                    <div class="col">
                      <div class="md-form">
                        <input class="form-control" type="text" name="municipio" id="municipio">
                        <label for="Municipio">Municipio</label>
                      </div>      
                    </div>
                  </div>
                 </td> 
                 <td>
                  <button class="btn aqua-gradient px-3" type="submit" name="actmun" id="actmun" ><i class="fas fa-sync-alt" aria-hidden="true"></i></button>  
                 </td> 
              </tr> 
              </table>
          </form>
        </div>

         <div class="bannerImg">
          <img src="../lib/img/img2.jpeg">
         </div>
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
</html>

