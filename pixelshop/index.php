<?php

    try{
        $pdo = new PDO('mysql:host=localhost;dbname=;charset=utf8mb4', 'root', '');
    }catch (PDOException $e){
        echo "ERROR: " . $e->getMEssage();
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
    
</body>
</html>