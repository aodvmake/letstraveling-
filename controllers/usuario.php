<?php 

require_once("../models/consultaus.php");
$con=new modeloconsulta();
$usuario=$con->consult(); 

require_once("../views/listaus.php");
?>