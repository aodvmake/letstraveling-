<?php 
include("bd.php");
class modeloconsulta{
       function consul(){
       $conn = new callTo();
       $cnx = $conn->callmeBaby();
       $cons=mysqli_query($cnx,"SELECT* FROM idiomas");
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