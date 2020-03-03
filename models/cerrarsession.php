<?php 
session_destroy();
ob_start();
header('location: login.php');
?>