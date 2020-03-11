<?php 
session_start();
if ($_SESSION['email']){
  if ($_SESSION['tipo']=="Turista"){
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