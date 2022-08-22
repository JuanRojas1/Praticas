<?php
include("conexion.php");

if(!empty($_POST)){
    $Identificacion = null;
$Nombre = null;
$Apellido = null;
$Fecha = null;
$Genero = null;
}

if (isset($_POST['register'])) {

$Identificacion = $_POST['Identificacion'];
$Nombre = $_POST['Nombre'];
$Apellido = $_POST['Apellido'];
$Fecha = $_POST['fecha_Nacimiento'];
$Genero = $_POST['Genero'];


$valid = true;
if(empty($Identificacion)){
    $Identificacion = 'Coloque su Identificacion';
    $valid= false;
}

$valid = true;
if(empty($Nombre)){
    $Nombre = 'Coloque su Nombre';
    $valid= false;
}
$valid = true;
if(empty($Apellido)){
    $Apellido = 'Coloque su Apellido';
    $valid= false;
}

$valid = true;
if(empty($Fecha)){
    $Fecha = 'Coloque su Fecha';
    $valid= false;
}

$valid = true;
if(empty($Genero)){
    $Genero = 'Coloque su Genero';
    $valid= false;
}

$query = "INSERT INTO clientes(Identificacion, Nombre, Apellido, fecha_Nacimiento, Genero)
 VALUES ('$Identificacion','$Nombre','$Apellido','$Fecha','$Genero')";
$result= mysqli_query($conex,$query);
if(!$result){
    die("query failed");
}

header("location: index.php");
}
