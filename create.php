<?php 

require_once "db_connect.php";

if(isset($_POST["btn-confirmar"])){

    $query = $pdo->prepare("SELECT * FROM contatos WHERE nome = ? and email = ? and tel = ?");

    $query->bindParam(1, $nome);
    $query->bindParam(2, $email);
    $query->bindParam(3, $tel);

}