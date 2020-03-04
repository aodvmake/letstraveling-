<?php 
include("bd.php");
class modeloguardar{
       function guardarpass($pass,$email){
       $actpass = new callTo();
       $cnx = $actpass->callmeBaby();
        mysqli_query($cnx,"UPDATE usuarios SET pass='$pass' WHERE email='$email'") or die("error no inserto usuarios");
    }
  }
class modeloguardartele{
	function guardartele($telefono,$email){
       $acttele = new callTo();
       $cnx = $acttele->callmeBaby();   
       //traemos el id del usuario
       $id=mysqli_query($cnx,"SELECT* FROM `usuarios` WHERE email='$email' ");
       $rows="";
       if ($row=mysqli_fetch_array($id)){
          $rows=$row['id_usuario'];
       }
       //guardamos el los cambios
        mysqli_query($cnx,"UPDATE datosgenerales SET telefono='$telefono' WHERE id_usuario='$rows' ") or die("error no inserto usuarios");
       }
   }
class modeloguardardomicilio{
      function guardardomi($domicilio,$email){
       $actdomi = new callTo();
       $cnx = $actdomi->callmeBaby();
       
       $id=mysqli_query($cnx,"SELECT* FROM `usuarios` WHERE email='$email' ");
       $rows="";
       if ($row=mysqli_fetch_array($id)){
          $rows=$row['id_usuario'];
       }
       //guardamos el los cambios
        mysqli_query($cnx,"UPDATE datosgenerales SET domicilio='$domicilio' WHERE id_usuario='$rows' ") or die("error no inserto usuarios");
       }
   } 
class modeloguardarcolonia{
   function guardarcolonia($colonia,$email){
       $actcol = new callTo();
       $cnx = $actcol->callmeBaby();
       
       $id=mysqli_query($cnx,"SELECT* FROM `usuarios` WHERE email='$email' ");
       $rows="";
       if ($row=mysqli_fetch_array($id)){
          $rows=$row['id_usuario'];
       }
       //guardamos el los cambios
       mysqli_query($cnx,"UPDATE datosgenerales SET colonia='$colonia' WHERE id_usuario='$rows' ") or die("error no inserto usuarios");
     }     
}
class modeloguardarndom{
    function guardarndom($ndomicilio,$email){
       $actndom = new callTo();
       $cnx = $actndom->callmeBaby();
       
       $id=mysqli_query($cnx,"SELECT* FROM `usuarios` WHERE email='$email' ");
       $rows="";
       if ($row=mysqli_fetch_array($id)){
          $rows=$row['id_usuario'];
       }
       //guardamos el los cambios
       mysqli_query($cnx,"UPDATE datosgenerales SET numero='$ndomicilio' WHERE id_usuario='$rows' ") or die("error no inserto usuarios");
   }
}
class modeloguardarmuni{
	function guadarmuni($municipio,$email){
	$actndom = new callTo();
       $cnx = $actndom->callmeBaby();
       
       $id=mysqli_query($cnx,"SELECT* FROM `usuarios` WHERE email='$email' ");
       $rows="";
       if ($row=mysqli_fetch_array($id)){
          $rows=$row['id_usuario'];
       }
       //guardamos el los cambios
       mysqli_query($cnx,"UPDATE datosgenerales SET municipio='$municipio' WHERE id_usuario='$rows' ") or die("error no inserto usuarios");	
	}
}
?>