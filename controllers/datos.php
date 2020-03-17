<?php 

require_once("../models/consultada.php");
$cond=new modeloconndatos();
$dato=$cond->conndatos(); 

require_once("../views/datos.php");
?>