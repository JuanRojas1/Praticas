<?php
include("conexion.php");


$Identificacion=$_POST['Identificacion'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Fecha = $_POST['fecha_Nacimiento'];
$Genero = $_POST['Genero'];

$sql="UPDATE clientes SET  Nombre='$Nombre',Apellido='$Apellido',fecha_Nacimiento='$Fecha', Genero='$Genero'  
WHERE Identificacion='$Identificacion'";
$query=mysqli_query($conex,$sql);

    if($query){
        Header("Location: index.php");
    }

?>
