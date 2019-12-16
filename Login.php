<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login de usuario</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif
        }

        form {
            border: 3px solid #f1f1f1;
            padding: 16px
        }
    </style>
</head>

<body>
    <form action="Login.php" method="POST">
        <h3>Login de Usuario</h3>
        <label for="txt1">Usuario:</label>
        <input id="txt1" type="text" name="t1" required>
        <br>
        <br>
        <label for="txt2">Password:</label>
        <input id="txt2" type="text" name="t2" required>
        <br>
        <input type="submit" value="Ingresar">
    </form>
</body>
<?php
if ($_POST) {
    session_start();
    require('Conexion.php');
    $u = $_POST['t1'];
    $p = $_POST['t2'];
    $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $query = $conexion->prepare(" SELECT*FROM usuarios where nombre = '$u' AND contraseña = '$p'");
    $query->execute();
    $usuario = $query->fetch(PDO::FETCH_ASSOC);
    if ($usuario) {
        $_SESSION['usuario'] = $usuario["nombre"];
        header("location:Pagina_segura.php");
    } else {
        echo "Usuario o contraseña son incorrectos";
    }
}
?>

</html>