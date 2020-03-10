<?php
include("bd.php");
class modeloguardar{
       function guardar($array2,$id,$arraylugar,$dia){
       $conhd = new callTo();
       $cnx = $conhd->callmeBaby();
       $email=$_SESSION['email'];

       $const=mysqli_query($cnx,"SELECT* FROM usuarios WHERE email='$email' ");
     
       if ($row=mysqli_fetch_array($const)){
          $rows=$row['id_usuario'];
       }



       $dias="";
       $lugar="";
        for ($i=0; $i <count($id) ; $i++) { 
   	   $dias.=$dia[$i].",";
   	   $lugar.=$array2[$i].",";
   	    mysqli_query($cnx,"INSERT INTO lugarvista VALUES('".$id[$i]."','".$array2[$i]."','".$arraylugar[$i]."')");
   	    
      } 
        mysqli_query($cnx,"INSERT INTO vistahorario VALUES('$rows','$dias','$lugar')");
        echo '<script language="javascript">alert("Datos Guardados");</script>';
   }
}
 ?>