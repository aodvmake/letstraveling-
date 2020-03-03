<?php
include("bd.php");
class modeloguardar{
       function guardar($correo,$pass,$telefono,$fecha){
       $clonn = new callTo();
       $rcnx = $clonn->callmeBaby();
     //Inserta en las tablas necesarias 
      mysqli_query($rcnx,"INSERT INTO usuarios VALUES ('','$pass','','Activo','$correo')") or die("error no inserto usuarios");

     //Consulta el correo que se acaba de regustrar y trae el id
      $cons=mysqli_query($rcnx,"SELECT* FROM `usuarios` WHERE email='$correo' ");
      $rows="";
      if ($row=mysqli_fetch_array($cons)){
          $rows=$row['id_usuario'];
      }
      // Inserta los datos siguientes 
      mysqli_query($rcnx,"INSERT INTO `datosgenerales`(`telefono`,`fechaN`,`id_usuario`) VALUES ('$telefono','$fechaN','$rows')") or die("error no inserto datos generales");
      
      mysqli_query($rcnx,"INSERT INTO puesto VALUES ('4','$rows')") or die("error no inserto puesto");

      echo "Datos guardados con éxito";
    }
  }
  ?>