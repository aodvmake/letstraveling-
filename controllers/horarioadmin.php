
<?php 
require_once("../models/conadminhr.php");
$conah=new modadmconsultahr();
$horario =$conah->conadhr(); 

require_once("../views/horarios.php");
?>