<?php

    if(!isset($_SESSION)) {
        session_start();
    }
    if(!isset($_SESSION['usuario'])) {
        die("Você não está logado! Para acessar a página, realize o login clicando no botão abaixo.<p><a href=\"index.php\">Entrar</a></p>");
    }

?>