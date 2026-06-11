<?php

    include __DIR__ . '/../pixelshop/config/db.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Crear Producto</h2>

    <form method="post">
        <label>Título: </label>
        <input type="text" name="titulo" placeholder="Introduce el título">
        <label>Categoria: </label>
        <input type="text"  name="categoria" placeholder="Introduce la categoria">
        <label>Precio: </label>
        <input type="number" name="precio" id="precio">
        <label>Stock: </label>
        <input type="number" name="stock" id="stock">
        <button type="submit">Añadir Usuario</button>
    </form>
</body>
</html>