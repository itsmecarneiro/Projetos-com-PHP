<?php
$Nome = null;
$Email = null;
$Idade = null;

function validarCadastro(?string $nome, ?string $email, ?int $idade): string
{
    if ($nome === null || $idade === null || $email === null) {
        return "Dados inválidos!";
    }

    $nome = trim(strip_tags($nome));
    $email = trim(strip_tags($email));

    if ($nome === "" || $email === "") {
        return "Nome ou email inválido!";
    }
    if ($idade < 18) {
        return "Usuário menor de idade!";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        "Email inválido!";
    }
    return "Cadastro realizado com sucesso!";
}

echo validarCadastro($Nome, $Email, $Idade);
