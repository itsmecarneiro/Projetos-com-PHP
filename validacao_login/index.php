<?php
$Usuario = null;
$Senha = null;

function validarUsuario (?string $usuario, ?string $senha): string{
    if ($usuario === null || $senha === null) {
        return "Dados Inválidos!";
}

$usuario = strip_tags(trim($usuario));
$senha = strip_tags(trim($senha));

if ($usuario === "" || $senha === "") {
    return "Usuário ou senha vazios";
}
if ($usuario !== "admin" || $senha !== "123456") {
    return "Usuário ou senha incorretos!";
}
return "Login realizado com sucesso!";
}

echo validarUsuario($Usuario,$Senha);
?>