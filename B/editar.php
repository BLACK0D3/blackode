<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR</title>
</head>

<body>
    <?php
    $id = $_POST["id"];
    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $telefono = $_POST["telefono"];
    $correo = $_POST["correo"];
    $consulta = $_POST["consulta"];

 
    if(isset($_POST["editar2"])){
        include("conexion.php");
        include("r.php");
        $getmysql=new mysqlconex();
        $getconex=$getmysql->conex();

        $query='UPDATE cliente SET nombre=?,apellido=?,telefono=?,correo=?,consulta=? WHERE id=?';
        $sentencia=mysqli_prepare($getconex,$query);
        mysqli_stmt_bind_param($sentencia,"sssssi",$nombre,$apellido,$telefono,$correo,$consulta,$id);
        mysqli_stmt_execute($sentencia);
        $afectado=mysqli_stmt_affected_rows($sentencia);
        if($afectado==1){
            echo "<script> alert('El cliente $nombre se edito correctamente '); location.href='../index.php'; window.open('r.php', '_self')</script>";
        }else{
            echo "<script> alert('El cliente $nombre no se edito'); location.href='../index.php'; window.open('r.php', '_self')</script>";
        }
        mysqli_stmt_close($sentencia);
        mysqli_close($getconex);
    }

    ?>

    <form action="editar.php" method="POST">
        <input type="hidden" value="<?php echo $id ?>" name="id">

        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" id="nombre" value="<?php echo $nombre ?>">

        <label for="apellido">Apellido: </label>
        <input type="text" name="apellido" id="apellido" value="<?php echo $apellido ?>">

    
        <label for="telefono">telefono: </label>
       <input type="number" name="telefono" id="telefono" value="<?php echo $telefono?>">

       <label for="correo">correo: </label>
       <input type="email" name="correo" id="correo" value="<?php echo $correo?>">

       <label for="consulta">observacion: </label>
       <input type="text" name="consulta" id="consulta" value="<?php echo $consulta?>">

        <input type="submit" name="editar2" value="editar">
    </form>
</body>

</html>