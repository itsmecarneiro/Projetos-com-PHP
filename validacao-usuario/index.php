<?php

$Nome = null;
$Idade = null;
$Email = null;

function validarUsuario(?string $nome, ?int $idade, ?string $email)
{
    if ($nome === null || $idade === null || $email === null) {
        return "Dados Nulos";
    }
    if ($nome === '' || $idade < 0 || $email === '') {
        return "Dados vazios ou idade menor do que zero";
    }
    if($idade < 18) {
        return "Usuario menor de idade";
    }
    return "Tudo certo";
}

$validacao = validarUsuario($Nome, $Idade, $Email);

echo $validacao;
?>