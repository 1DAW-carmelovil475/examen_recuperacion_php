<?php

    session_start();

    $usuario = "admin";
    $password = "admin";

    if(isset($_POST['nombre'], $_POST['password'])){
        if($_POST['nombre'] === $usuario && $_POST['password'] === $password){
            $_SESSION['usuario'] = $_POST['usuario'];
            header("Location: index.php");
        }else{
            echo "ERROR: El usuario o la contraseña son incorrectos. Inténtelo de nuevo";
        }
    }else{
        echo "ERROR: Se debe de indicar un usuario y una contraseña";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="usuario" placeholder="Introduce el usuario">
        <input type="password" name="password" placeholder="Introduce la contraseña">
        <button type="submit">Iniciar Sesión</button>
    </form>
</body>
</html>