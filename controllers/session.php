<?php 
session_start();
if ($_SESSION['email']){
 if ($_SESSION['tipo']=="Guia"){
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
