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
    <h2>Listar productos</h2>
    <form>
        <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Título</td>
                    <td>Categoría</td>
                    <td>Precio</td>
                    <td>Stock</td>
                </tr>
            </thead>    
            <tbody>
                <?php foreach($datos as $producto):?>
                <tr>
                    <td><?php echo $producto['id']; ?></td>
                    <td><?php echo $producto['titulo'] ?></td>
                    <td><?php echo $producto['categoria']?></td>
                    <td><?php echo $producto['precio']?></td>
                    <td><?php echo $producto['stock']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
    </form>
    <h2>Ordenar</h2>
    <form method="get">
        <select id="ordenar" name="ordenar">
            <option value="">Ordenar por:</option>
            <option value="precio_asc">Precio Ascendente</option>
            <option value="precio_desc">Precio Descendente</option>
            <option value="titulo_asc">Título Ascendente</option>
            <option value="titulo_desc">Título Descendente</option>
        </select>
        <button type="submit">Ordenar</button>
    </form>
    <table border="1">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>Título</td>
                    <td>Categoría</td>
                    <td>Precio</td>
                    <td>Stock</td>
                </tr>
            </thead>    
            <tbody>
                <?php foreach($stmt as $producto):?>
                <tr>
                    <td><?php echo $producto['id']; ?></td>
                    <td><?php echo $producto['titulo'] ?></td>
                    <td><?php echo $producto['categoria']?></td>
                    <td><?php echo $producto['precio']?></td>
                    <td><?php echo $producto['stock']?></td>
                </tr>
                <?php endforeach; ?>
            </tbody>

        </table>
</body>
</html>