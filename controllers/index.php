<?php 
 mb_internal_encoding("iso-8859-1");
 mb_http_output( "UTF-8" );
 ob_start("mb_output_handler");
require_once("models/consulta.php");
$con=new modeloconsulta();
$idiomas =$con->consul(); 
require_once("views/resgistro.php");
 ?>
