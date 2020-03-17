<?php 
session_start();
include("bd.php");
class modeloguardar{
       function guardar($comentario,$rating){
       $conn = new callTo();
       $cnx = $conn->callmeBaby();
       $ids=$_SESSION['id'];
       $email=$_SESSION['email'];

       $const=mysqli_query($cnx,"SELECT* FROM usuarios WHERE email='$email' ");
     
       if ($usr=mysqli_fetch_array($const)){
          $user=$usr['id_usuario'];
       }
       mysqli_query($cnx,"INSERT INTO calificacion VALUES('$ids','$rating','$comentario','$user','')");
       echo "Se han guardado los datos";
   }
  }
?>