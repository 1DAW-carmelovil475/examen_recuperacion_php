<?php

    include __DIR__ . '/../includes/functions.php';


    try{

        
        $conn = new PDO('mysql:host=localhost;dbname=pixelshop;charset=utf8mb4', 'root', '');

        $pdo = $conn;

        if(!$pdo){

            $script_crear = "CREATE DATABASE IF NOT EXISTS pixelshop
            CHARACTER SET utf8mb4
            COLLATE utf8mb4_unicode_ci;
            USE pixelshop;
            ";
            
            $statement = $pdo->prepare($script_crear);
            $statement->execute();


        }else{
            $script = "CREATE TABLE IF NOT EXISTS productos (
            id          INT            NOT NULL AUTO_INCREMENT,
            titulo      VARCHAR(150)   NOT NULL,
            categoria   VARCHAR(80)    NOT NULL,
            precio      DECIMAL(8,2)   NOT NULL CHECK (precio >= 0),
            stock       INT            NOT NULL DEFAULT 0,
            activo      TINYINT(1)     NOT NULL DEFAULT 1,
            created_at  TIMESTAMP      NOT NULL DEFAULT CURRENT_TIMESTAMP,

            PRIMARY KEY (id)
            ) ENGINE=InnoDB
            DEFAULT CHARSET=utf8mb4
            COLLATE=utf8mb4_unicode_ci;";

            $statement = $pdo->prepare($script);
            $statement->execute();

            $datos = $pdo->prepare("SELECT * FROM productos");
            $datos->execute();

            $valor = $pdo->query($script)->fetchColumn();

            if($datos === ""){
                insertarDatosPrueba($pdo);
            }
        }

        if(isset($_GET['ordenar'])){

            if($_GET['ordenar'] === "precio_asc"){

                $select = "SELECT * FROM productos ORDER BY precio ASC" ;
                $stmt = $pdo->prepare($select);
                $stmt->execute();

            }elseif($_GET['ordenar'] === "precio_desc"){

                $select = "SELECT * FROM productos ORDER BY precio DESC" ;
                $stmt = $pdo->prepare($select);
                $stmt->execute();

            }elseif($_GET['ordenar'] === "titulo_asc"){
                
                $select = "SELECT * FROM productos ORDER BY titulo ASC" ;
                $stmt = $pdo->prepare($select);
                $stmt->execute();

            }elseif($_GET['ordenar'] === "titulo_desc"){

                $select = "SELECT * FROM productos ORDER BY titulo DESC" ;
                $stmt = $pdo->prepare($select);
                $stmt->execute();

            }else{
                throw new PDOException("El order debe de ser correcto");
            }



        }else{

            throw new PDOException("Hay que ordenar correctamente");

        }


        if(isset($_POST['titulo'], $_POST['categoria'], $_POST['precio'], $_POST['stock'])){
            if($_POST['titulo'] !== "" && $_POST['categoria'] !== "" && $_POST['precio'] >= 0 && $_POST['stock'] >= 0){
                
                $sql = "INSERT INTO productos ('titulo', "

            }
        }

        
    }catch (PDOException $e){
        echo "ERROR: " . $e->getMEssage();
    }

?>