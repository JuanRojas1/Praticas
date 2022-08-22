<?php
include("registro.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.php">
    <script src="https://kit.fontawesome.com/4a2ec60152.js" crossorigin="anonymous"></script>
    <title>Praticas</title>

</head>

<body>

    <div class="menu">
        <nav>
            <ul>
                <li><a href="#">Inicio</a></li>
                <li><a href="#">Nosotros</a></li>
            </ul>
        </nav>
    </div>
    <div class="from ">

        <h1>Ingrese sus datos</h1>

        <form action="registro.php" method="POST">
            
            <table id="tabla">

                <td>Identificacion</td>
                <td><input type="number" name="Identificacion"></td>
                <tr>
                    <td>Nombre</td>
                    <td><input type="text" name="Nombre"></td>
                </tr>
                <tr>
                    <td>Apellido</td>
                    <td><input type="text" name="Apellido"></td>
                </tr>
                <tr>
                    <td>Fecha de nacimiento</td>
                    <td><input type="date" name="fecha_Nacimiento"></td>
                </tr>
                <tr>
                    <td>Genero</td>
                    <td>
                        <input type="radio" name="Genero" value="Masculino">Masculino
                        <br>
                        <input type="radio" name="Genero" value="Femenino">Femenino
                    </td>
                </tr>


        </form>

        </table>
        <input type="submit" name="register">
    </div>


    <div>
        <table id="tabla">
            <thead>
                <tr>
                    <th>Identificacion</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Fecha nacimiento</th>
                    <th>Genero</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>

            <tbody>
                <?php
                $query = "SELECT * FROM clientes";
                $resultado = mysqli_query($conex, $query);
                while ($row = mysqli_fetch_array($resultado)) {
                ?>
                    <tr>
                        <th><?php echo $row['Identificacion'] ?></th>
                        <th><?php echo $row['Nombre'] ?></th>
                        <th><?php echo $row['Apellido'] ?></th>
                        <th><?php echo $row['fecha_Nacimiento'] ?></th>
                        <th><?php echo $row['Genero'] ?></th>
                        <td><a href="actualizar.php?codigo=<?php echo $row['Identificacion'] ?>"><i class="fa-solid fa-user-pen"></i></a></td>
                        <th><a href="eliminar.php?codigo=<?php echo $row['Identificacion'] ?>"><i class="fa-solid fa-trash-can"></i></a></th>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>


</body>

</html>