<!DOCTYPE>
<html>
<head>
<meta charset="utf-8">
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
  <link rel="icon" type="image/png" href="lib/img/icono.png">
	<title>Login</title>
</head>

<body>
<div class="container">
    <header id="navbar" >
      <a href="" class="logo">LET S<span>TRAVEL</span></a>
      <ul>
      <li><a href="index.php">Inicio</a></li>
    </ul>
    <span class="menuIcon" onclick="menuToggle();"></span>
    </header>

    <div class="content">
      <div class="card-body px-lg-5 pt-0">
        <h2>BIENVENIDO</h2>
        <form  method="POST">
            <div class="row">
              <div class="col">
                <div class="md-form">
               <i class="fas fa-user prefix"></i>
               <input type="text" id="email" class="form-control">
               <label for="email">E-mail</label>
                </div>      
              </div>
            </div>

            <div class="row">
              <div class="col">
                <div class="md-form">
                  <i class="fas fa-lock prefix"></i>
                  <input type="password" id="pass" class="form-control validate">
                  <label for="pass" data-error="wrong" data-success="right">Password</label>
                </div>      
              </div>
            </div>

            <div class="row text-center">
              <div class="col">
                <button class="btn aqua-gradient" type="submit" name="enviar" id="enviar">Entrar</button>
              </div>
            </div>
        </form>
      </div>   

     <div class="bannerImg">
      <img src="lib/img/img4.jpeg">
     </div>
    </div>  
  </div>



 <script type="text/javascript" src="lib/js/jquery.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="lib/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="lib/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="lib/js/mdb.min.js"></script>
  <script type="text/javascript" src="js/log.js"></script>
</body>
</html>