
<?php
include("conexion.php");
include("r.php");
$getmysql = new mysqlconex();
$getconex = $getmysql->conex();

if (isset($_POST["registro"])) {
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $consulta = $_POST["consulta"];

    $query = 'INSERT INTO cliente (nombre,apellido,telefono,correo,consulta) VALUES (?,?,?,?,?)';
    $sentencia = mysqli_prepare($getconex, $query);
    mysqli_stmt_bind_param($sentencia, "sssss", $nombre,$apellido,$telefono,$correo,$consulta);
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('El cliente [$nombre] se agrego correctamente'); location.href='../r.php'; window.open('r.php', '_self')</script>";
    } else {
        echo "<script> alert('El cliente [$nombre] no agrego correctamente :( '); location.href='../r.php'; window.open('r.php', '_self')</script>";
    }
    mysqli_stmt_close($sentencia);
    mysqli_close($getconex);
}
?>
