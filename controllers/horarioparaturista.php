<?php 
require_once("../models/consultarhorario.php");
$con=new modeloconsulta();
$horario =$con->consul(); 
require_once("../views/turista.php");
?>