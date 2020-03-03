<?php 
session_start();
if ($_SESSION['email']){
  }
 else{
    eliminarsession();
   }
function eliminarsession(){
session_destroy();
header('location:../login.php');
}
?>
