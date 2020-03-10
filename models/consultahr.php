<?php 
include("bd.php");
class modeloconsulta{
       function consul(){
       $connh = new callTo();
       $cnx = $connh->callmeBaby();
       $rows="";
       $email=$_SESSION['email'];

       $const=mysqli_query($cnx,"SELECT* FROM usuarios WHERE email='$email' ");
     
       if ($row=mysqli_fetch_array($const)){
          $rows=$row['id_usuario'];
       }

       $cons=mysqli_query($cnx,"SELECT* FROM horarios WHERE id_usuario='$rows'");
       $retorno=[];
       $i=0;

       while ($fila=$cons->fetch_array()){
       	$retorno[$i]=$fila;
       	$i++;
       }
       return $retorno;
    }
}
?>