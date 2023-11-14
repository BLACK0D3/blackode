<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.0/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <title>BASE DE DATOS</title>
</head>
<script>
    function confirmacion() {
        var respuesta = confirm("¿Desea realmente borrar el registro?");
        if (respuesta == true) {
            return true;
        } else {
            return false;
        }

    }
</script>

<body>
    <form action="insertar.php" method="POST">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre">

        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido">
        
        <label for="telefono">telefono: </label>
       <input type="number" name="telefono" id="telefono">

       <label for="correo">correo: </label>
       <input type="email" name="correo" id="correo">

       <label for="consulta">observacion: </label>
       <input type="text" name="consulta" id="consulta">

    

        <input type="submit" name="registro" value="registro">
    </form>
    <br>
    <br>
    <table  class="table table-dark table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>APELLIDO</th>
                <th>telefono</th>
                <th>email</th>
                <th>Mensaje/Observacion</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include_once("conexion.php");
            $getmysql = new mysqlconex();
            $getconex = $getmysql->conex();

            $bus = "SELECT * FROM cliente";
            $resultado = mysqli_query($getconex, $bus);
            while ($fila = mysqli_fetch_assoc($resultado)) {
                echo "<tr>";
                echo "<td>" . $fila["id"] . "</td>";
                echo "<td>" . $fila["nombre"] . "</td>";
                echo "<td>" . $fila["apellido"] . "</td>";
                echo "<td>" . $fila["telefono"] . "</td>";
                echo "<td>" . $fila["correo"] . "</td>";
                echo "<td>" . $fila["consulta"] . "</td>";
                echo "<td>
                        <form action='eliminar.php' method='POST'>
                        <input type='hidden' name='id' value='" . $fila["id"] . "'>
                        <input type='hidden' name='nombre' value='" . $fila["nombre"] . "'>
                        <input type='submit' name='eliminar' value='eliminar' onclick='return confirmacion()'>
                        </form>
                    </td>";
                echo "<td>
                    <form action='editar.php' method='POST'>
                    <input type='hidden' name='id' value='" . $fila["id"] . "'>
                    <input type='hidden' name='nombre' value='" . $fila["nombre"] . "'>
                    <input type='hidden' name='apellido' value='" . $fila["apellido"] . "'>
                    <input type='hidden' name='telefono' value='" . $fila["telefono"] . "'>
                    <input type='hidden' name='correo' value='" . $fila["correo"] . "'>
                    <input type='hidden' name='consulta' value='" . $fila["consulta"] . "'>
                    <input type='submit' name='editar' value='editar' '>
                    </form>
                </td>";
                echo "</tr>";
            }
            mysqli_close($getconex);
            ?>
        </tbody>
    </table>

</body>

</html>