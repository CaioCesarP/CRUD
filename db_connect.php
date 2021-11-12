<?php

    $dsn = "mysql:host=localhost;dbname=crud";
    $username = "root";
    $password = "Itarget*123456";

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        $stmt = $pdo->prepare('INSERT INTO ');
        echo "conexão conectada com sucesso.";
        
    } catch(PDOException $error) {
        echo $error->getMessage();
    }

?>