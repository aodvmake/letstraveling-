<?php
include("bd.php");
class modeloguardar{
       function guardar($array2,$id,$arraylugar){
       $conhd = new callTo();
       $cnx = $conhd->callmeBaby();
      
        for ($i=0; $i <count($id) ; $i++) { 
   	    mysqli_query($cnx,"INSERT INTO lugarvista VALUES('".$id[$i]."','".$array2[$i]."','".$arraylugar[$i]."')");
   	      echo '<script language="javascript">alert("Datos Guardados");</script>';
      } 
   }
}
 ?>