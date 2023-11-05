<?php
    $bd_user = 'root';
    $bd_senha = '';
    $database = 'banco';
    $host = 'localhost';

    $mysqli = new mysqli($host, $bd_user, $bd_senha, $database);

    if($mysqli -> error) {
        die("Falha ao conectar ao banco de dados: " . $mysqli -> error);
    }

?>