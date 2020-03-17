
<?php 
include("bd.php");
class modeloconsulta{
       function consult(){
       $connu = new callTo();
       $cnx = $connu->callmeBaby();
       $rows="";
       $email=$_SESSION['email'];


       $consa=mysqli_query($cnx,"SELECT* FROM usuarios");
       $retorno=[];
       $i=0;
       while ($fila=$consa->fetch_array()){
            $retorno[$i]=$fila;
            $i++;
       }
       return $retorno;
    }

      function borrar(){
       $connu = new callTo();
       $cnx = $connu->callmeBaby();
       $rows="";
       $email=$_SESSION['email'];


       $consa=mysqli_query($cnx,"DELETE* FROM usuarios WHERE id_usuario ='$id_usuario' ");
       $retorno=[];
       $i=0;
       while ($fila=$consa->fetch_array()){
            $retorno[$i]=$fila;
            $i++;
       }
       return $retorno;
    }
}
?>





