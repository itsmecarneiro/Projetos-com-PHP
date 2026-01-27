<?php
$Usuario = null;
$Senha = null;

function validarUsuario(?string $usuario, ?string $senha) 
{
    if ($usuario === null || $senha === null){
        return "Usuário ou senha não informados!";
    }

    $usuario = trim($usuario);
    $senha = trim($senha);

    if ($usuario === " " || $senha === " "){
        return "Campos obrigatórios sem nada!";
    }

    if ($usuario !== 'jessica' || $senha !== '123'){
        return "Usuário ou senha incorretos!";
    }
    
    return "Login feito com sucesso!";
}

$validacao = validarUsuario($Usuario, $Senha);

echo $validacao;
?>