<?php 
include("bd.php");
class modeloguardar{
       function guardar($correo,$pass,$telefono,$domicilio,$colonia,$ndomicilio,$rfc,$curp,$estado,$municipio,$fecha,$idioma){
       $conn = new callTo();
       $cnx = $conn->callmeBaby();
     //Inserta en las tablas necesarias
      mysqli_query($cnx,"INSERT INTO usuarios VALUES ('','$pass','','Activo','$correo')") or die("error no inserto");
     //Consulta el correo que se acaba de regustrar y trae el id
      $cons=mysqli_query($cnx,"SELECT* FROM `usuarios` WHERE email='$correo' ");
      $rows="";
      if ($row=mysqli_fetch_array($cons)){
          $rows=$row['id_usuario'];
      }
      // Inserta los datos siguientes 
      mysqli_query($cnx,"INSERT INTO datosgenerales VALUES ('$telefono','$domicilio','$colonia','$ndomicilio','$rfc','$curp','$municipio','$estado','$fecha','$rows')") or die("error no inserto");
      
      mysqli_query($cnx,"INSERT INTO idioma VALUES ('$idioma','$rows')") or die("error no inserto");

      mysqli_query($cnx,"INSERT INTO puesto VALUES ('3','$rows')") or die("error no inserto");

      echo "Datos guardados con éxito";
    }
  }
 ?>