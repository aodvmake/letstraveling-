<?php 
session_start();
if ($_SESSION['email']){
	echo $_SESSION['email'];
  }
 else{
    eliminarsession();
   }
//function eliminarsession(){
//session_destroy();
//header('location:../login.php');
//}
?>