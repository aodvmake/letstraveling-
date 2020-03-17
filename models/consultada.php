<?php 
include("bd.php");
class modeloconndatos{
       function conndatos(){
       $connd = new callTo();
       $cnx = $connd->callmeBaby();
       $rows="";
       $email=$_SESSION['email'];


       $consad=mysqli_query($cnx,"SELECT* FROM datosgenerales");
       $retorno=[];
       $i=0;
       while ($fila=$consad->fetch_array()){
            $retorno[$i]=$fila;
            $i++;
       }
       return $retorno;
    }
}
?>