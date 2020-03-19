<?php
session_start();
include("../models/kingeliminarhorarios.php");    
    $obj=new modeloguardar();
    $horario =$obj->guardar(); 
?>