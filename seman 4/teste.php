<?php

$login = "Admin";
$senha = 987456;

$loginDigitado = "Pamela";
$senhaDigitada = 123456;

if ($senhaDigitada == $senha and $loginDigitado == $login){
    echo "Logado com sucesso";
} else {
    echo "Erro";
}
