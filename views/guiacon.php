<?php  
include("../controllers/session.php");
include("../controllers/horario.php");
?>
<html>
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

    <div class="content">
      <div class="card-body px-lg-5 pt-0">
        <h2>Horarios</h2>
          <form  class="text-center" method="POST" action="../controllers/guardarhorario.php"> 
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
  <script type="text/javascript">
    $('#materialIndeterminate2').prop('indeterminate', true);
  </script>
</html>