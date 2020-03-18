<?php 
include("bd.php");
class modeloguardar{
       function guardar(){
       $conn = new callTo();
       $cnx = $conn->callmeBaby();
       $email=$_SESSION['email'];
       $const=mysqli_query($cnx,"SELECT* FROM usuarios WHERE email='$email' ");
     
       if ($usr=mysqli_fetch_array($const)){
          $user=$usr['id_usuario'];
       }

       $idempleado=$_SESSION['id'];
       $conturista=mysqli_query($cnx,"SELECT horarios.id_horario FROM horarios INNER JOIN lugarvista ON horarios.id_horario=lugarvista.id_horario WHERE horarios.id_usuario='$idempleado'");
      $row=0;
      $rows="";
      while ($row<$rows=mysqli_fetch_array($conturista)): 
        mysqli_query($cnx,"INSERT INTO regitrov VALUES('',' $user','".$rows[$row]."')");
      endwhile;
   }
  }
?>

<a href="../views/turistabuscar.php">Se agrego correctamente a tu horario de visitas</a>