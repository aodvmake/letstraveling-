<?php 
session_start();
include("../models/agregarguia.php");
    $obj=new modeloguardar();
    echo $obj->guardar();
?>