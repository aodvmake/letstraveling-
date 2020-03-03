<?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($array,$hrinicio,$hrfinal){
       $conhr = new callTo();
       $cnhr = $conhr->callmeBaby();
     //Antes de insertar se consulta el id
      $variableaa=count($array);
      $email=$_SESSION['email'];
      $cons=mysqli_query($cnhr,"SELECT* FROM `usuarios` WHERE email='$email' ");
      $rows="";
      if ($row=mysqli_fetch_array($cons)){
          $rows=$row['id_usuario'];
      }
     //Se guarda el id usuario y se recorre el array
    for ($i=0; $i <$variableaa ; $i++) { 
    	 
    	 mysqli_query($cnhr,"INSERT INTO horarios VALUES ('$rows','','".$array[$i]."','$hrinicio','$hrfinal')");
    }
    echo '<script language="javascript">alert("Datos Guardados");</script>';
    header("location: ../views/guia.php");
    }
  }
?>