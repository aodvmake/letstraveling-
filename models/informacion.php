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
       //Sacar la calificacion
       $cali=mysqli_query($cnx,"SELECT AVG(calificacion) AS calificacion FROM calificacion WHERE id_usuario='$idempleado' ") or die("murio");
       if ($ca=mysqli_fetch_array($cali)){
          $calif=$ca['calificacion'];
       }     
         $califi=round($calif);
          if($califi==1){
          	echo "Calificacion: <p class='clasificacion'>
                   <input id='radio5' type='radio' name='estrellas' value='1'>
                   <label for='radio5'>★</label>
             </p>";
          }
          if($califi==2){
          	echo "Calificacion:<br> <p class='clasificacion'>
                   <input id='radio4' type='radio' name='estrellas' value='2'>
                   <label for='radio4'>★</label>
                   <input id='radio5' type='radio' name='estrellas' value='1'>
                   <label for='radio5'>★</label>
                </p>";
          } 
          if($califi==3){   
          	echo "Calificacion: <p class='clasificacion'>
                    <input id='radio3' type='radio' name='estrellas' value='3'>
                    <label for='radio3'>★</label>
                    <input id='radio4' type='radio' name='estrellas' value='2'>
                    <label for='radio4'>★</label>
                    <input id='radio5' type='radio' name='estrellas' value='1'>
                    <label for='radio5'>★</label>
                 </p>";
          }
          if($califi==4){
            echo "Calificacion: <p class='clasificacion'>
                    <input id='radio2' type='radio' name='estrellas' value='4'>
                    <label for='radio2'>★</label>
                    <input id='radio3' type='radio' name='estrellas' value='3'>
                    <label for='radio3'>★</label>
                    <input id='radio4' type='radio' name='estrellas' value='2'>
                    <label for='radio4'>★</label>
                    <input id='radio5' type='radio' name='estrellas' value='1'>
                    <label for='radio5'>★</label>
                  </p>";
          }
          if($califi==5){
            echo "Calificacion: <p class='clasificacion'>
                     <input id='radio1' type='radio' name='estrellas' value='5'>
                     <label for='radio1'>★</label>
                     <input id='radio2' type='radio' name='estrellas' value='4'>
                     <label for='radio2'>★</label>
                     <input id='radio3' type='radio' name='estrellas' value='3'>
                     <label for='radio3'>★</label>
                     <input id='radio4' type='radio' name='estrellas' value='2'>
                     <label for='radio4'>★</label>
                     <input id='radio5' type='radio' name='estrellas' value='1'>
                     <label for='radio5'>★</label>
                 </p>";
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
      $tabla.="</table><br>";
      echo $tabla;
    ///idiomas que habla el guia
    $idioma=mysqli_query($cnx,"SELECT* from idioma INNER JOIN idiomas on idioma.id_idioma=idiomas.id_idioma WHERE idioma.id_usuario='$idempleado' ");
     $fila=0;
     $filas="";
     $tablaidi="<table><tr><th>Idiomas hablados</th></tr>";
           while ($fila<$filas=mysqli_fetch_array($idioma)): 
          $tablaidi.="<tr>";  
          $tablaidi.="<td>".$filas['nombre'];"</td>"; 
          $tablaidi.="</tr>";
       $row++;
      endwhile;
      $tablaidi.="</table><br>";
      echo $tablaidi;
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
   }
}
?>
 


