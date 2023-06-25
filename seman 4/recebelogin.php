<?php

    $emailnobd = "fulana@yahoo";
    $senhanobd = 12345;

    $email = $_POST["email"];
    $senha = $_POST["senha"];

    if ($email == $emailnobd and $senha == $senhanobd) {
        echo "Olá, $email, seja bem-vindo(a)! :)";
    } else {
        header('location: login.php'); //para voltar a pagina de login, ao inves de mostarar o erro
    }
    
 
    
    