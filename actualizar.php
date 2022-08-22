<?php
include("conexion.php");

$Identificacion = $_GET['codigo'];
$sql = "SELECT * FROM clientes WHERE Identificacion ='$Identificacion'";
$query = mysqli_query($conex, $sql);

$row = mysqli_fetch_array($query);


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <title>Actuliza tus datos</title>
</head>

<body>
    <div class="from ">
        <h1>Actualiza tus datos</h1>
        <form action="editar.php" method="POST">
            <table id="tabla">

                <td>Identificacion</td>
                <td><input type="number" name="Identificacion" value="<?php echo $row['Identificacion'] ?>"></td>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="Nombre" value="<?php echo $row['Nombre'] ?>"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="Apellido" value="<?php echo $row['Apellido'] ?>"></td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento</td>
                    <td><input type="date" name="fecha_Nacimiento" value="<?php echo $row['fecha_Nacimiento'] ?>">></td>
                </tr>
                <tr>

                    <td>Genero</td>
                    <td>
                        <input type="radio" name="Genero" value="Masculino" value="<?php echo ['Genero'] ?>">Masculino
                        <br>
                        <input type="radio" name="Genero" value="Femenino" value="<?php echo ['Genero'] ?>">Femenino
                    </td>
                </tr>
        </form>
        </table>
        <input type="submit" value="Actualizar">
    </div>
</body>

</html>