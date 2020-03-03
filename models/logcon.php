<?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($email,$pass){
       $cclonn = new callTo();
       $rrcnx = $cclonn->callmeBaby();
     //Inserta en las tablas necesarias 
      $conp=mysqli_query($rrcnx,"SELECT US.id_usuario,US.email,US.pass,puestos.nombre FROM usuarios AS US INNER JOIN puesto ON US.id_usuario=puesto.id_usuario INNER JOIN puestos on puesto.id_puesto=puestos.id_puesto WHERE US.email='$email' AND US.pass='$pass' ");
      $rows="";

      if ($row=mysqli_fetch_array($conp)){
          $rows=$row['nombre'];
          $_SESSION["email"]=$row['email'];
          $_SESSION['tipo']=$row['nombre'];
          }
       
         switch ($rows) {
         	case 'Guia': echo "Guia";
         		break;
            case 'Turista': echo "Turista";
         		break;
         	case 'Administrador': echo "Administrador";
				break;
			case 'King': echo "King";
				break;
         }
      }
    }
?>