<?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($idempleado){
       $conn = new callTo();
       $cnx = $conn->callmeBaby();
     //consulta de usuario
       $email=$_SESSION['email'];
       $_SESSION['id']=$idempleado;

       $const=mysqli_query($cnx,"SELECT* FROM usuarios WHERE email='$email' ");
     
       if ($usr=mysqli_fetch_array($const)){
          $user=$usr['id_usuario'];
       }
       //mostrar los horarios completos
      $conturista=mysqli_query($cnx,"SELECT* FROM horarios INNER JOIN lugarvista ON horarios.id_horario=lugarvista.id_horario WHERE horarios.id_usuario='$idempleado'");
      $row=0;
      $rows="";
      $tabla="<table><tr><th>Dia</th><th>Hora inicio</th><th>Hora final</th><th>Lugar</th><th>Ubicación</th></tr>";
      while ($row<$rows=mysqli_fetch_array($conturista)): 
          $tabla.="<tr>";  
          $tabla.="<td>".$rows['dia'];"</td>"; 
          $tabla.="<td>".$rows['horarioi'];"</td>"; 
          $tabla.="<td>".$rows['horariof'];"</td>" ; 
          $tabla.="<td>".$rows['nombre'];"</td>";
          $tabla.="<td>".$rows['lugar'];"</td>" ;  
          $tabla.="</tr>";
       $row++;
      endwhile;
      $tabla.="</table>";
      echo $tabla;
     //consultar los comentarios
     $concomentario=mysqli_query($cnx,"SELECT* FROM calificacion WHERE id_usuario='$idempleado' ");
      $row2=0;
      $rows2="";
      $tabla2="<table><tr><th>Comentarios</th></tr>";
      while ($row2<$rows2=mysqli_fetch_array($concomentario)): 
          $tabla2.="<tr>";  
          $tabla2.="<td>".$rows2['comentario'];"</td>";  
          $tabla2.="</tr>";
       $row2++;
      endwhile;
      $tabla2.="</table>";
      echo $tabla2;
      $cookie_name = "user";
      $cookie_value = $idempleado;
  }
}
?>