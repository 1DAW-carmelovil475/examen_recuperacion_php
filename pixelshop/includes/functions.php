<?php

    
    function insertarDatosPrueba(PDO $pdo){
        $select_insert = "INSERT INTO productos (titulo, categoria, precio, stock, activo) VALUES 
        ('Teclado mecánico RGB TKL',         'Periféricos',  79.99,  42, 1),
        ('Ratón gaming 16000 DPI',           'Periféricos',  49.95,  67, 1),
        ('Monitor IPS 27 144 Hz',           'Monitores',   319.00,  15, 1),
        ('SSD NVMe 1 TB PCIe 4.0',           'Almacenamiento', 89.90, 88, 1),
        ('Auriculares inalámbricos 7.1',     'Audio',        59.50,  30, 1),
        ('Silla ergonómica pro',             'Mobiliario',  249.00,   8, 1),
        ('Webcam Full HD 1080p 60fps',       'Periféricos',  39.99,  55, 1),
        ('Hub USB-C 10 en 1',                'Accesorios',   34.95, 120, 1),
        ('Alfombrilla XXL antideslizante',   'Accesorios',   19.99, 200, 1),
        ('Tarjeta gráfica RTX 4060 8 GB',   'Componentes', 379.00,   5, 0);";

        $statement = $pdo->prepare($select_insert);
        $statement->execute();
    }

?>