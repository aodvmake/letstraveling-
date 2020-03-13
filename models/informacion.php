<?php 
include("bd.php");
class modeloguardar{
       function guardar($idempleado){
       $conn = new callTo();
       $cnx = $conn->callmeBaby();
     //muestra
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
  }
}

?>
<table></table>