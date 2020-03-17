<?php 
session_start();
if ($_SESSION['email']){
 if ($_SESSION['tipo']=="Administrador"){

   }
   else{
   eliminarsession();
   }
  }
 else{
    eliminarsession();
   }
function eliminarsession(){
session_destroy();
header('location:../login.php');
}
?>