<?php
include("conexion.php");

if(isset($_GET['codigo'])){
   $id= $_GET['codigo'];
}

$Identificacion=$_GET['codigo'];


$sql="DELETE FROM clientes  WHERE Identificacion='$Identificacion'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: index.php");
    }
?>