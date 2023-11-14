
<?php
include("conexion.php");
include("r.php");
$getmysql = new mysqlconex();
$getconext = $getmysql->conex();


if (isset($_POST["eliminar"])) {
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];

    $query = "DELETE FROM cliente WHERE id=?";
    $sentencia = mysqli_prepare($getconext, $query);
    mysqli_stmt_bind_param($sentencia, "i", $id);
    mysqli_stmt_execute($sentencia);
    $afectado = mysqli_stmt_affected_rows($sentencia);
    if ($afectado == 1) {
        echo "<script> alert('El cliente [$nombre] se elimino correctamente'); location.href='../index.php';  window.open('r.php', '_self');</script>";
        
    } else {
        echo "<script> alert('El cliente [$nombre] no elimino correctamente :( '); location.href='../index.php'; window.open('r.php', '_self')</script>";
    }
}
?>