
<?php 
include("bd.php");
class modadmconsultahr{
       function conadhr(){
       $conadhr = new callTo();
       $cnx = $conadhr->callmeBaby();
       $rows="";
       $email=$_SESSION['email'];


       $consahr=mysqli_query($cnx,"SELECT* FROM horarios");
       $retorno=[];
       $i=0;
       while ($fila=$consahr->fetch_array()){
            $retorno[$i]=$fila;
            $i++;
       }
       return $retorno;
    }
}
?>
