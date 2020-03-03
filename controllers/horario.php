<?php 
require_once("../models/consultahr.php");
$con=new modeloconsulta();
$horario =$con->consul(); 

require_once("../views/guiacon.php");
?>