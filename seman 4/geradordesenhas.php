<?php
function gerarSenha($tamanho = 8) {
    $caracteres = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789!@#$%^&*()';
    $senha = '';

    for ($i = 0; $i < $tamanho; $i++) {
        $senha .= $caracteres[rand(0, strlen($caracteres) - 1)];
    }

    return $senha;
}

// Defina o tamanho da senha desejada
$tamanhoSenha = 10;

// Gere uma senha
$senhaGerada = gerarSenha($tamanhoSenha);

// Exiba a senha gerada
echo "Senha gerada: " . $senhaGerada;

