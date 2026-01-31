<?php
$senha = null;

function validarSenha(?string $senha): string
{
    if ($senha === null) {
        return "Senha inválida!";
    }
    $senha = trim($senha);
    if ($senha === "") {
        return "Senha vazia!";
    }
    if (mb_strlen($senha) < 8) {
        return "Senha muito curta!";
    }
    if (!preg_match('/[A-Z]/', $senha)) {
        return "Necessário ter pelo menos 1 letra maiúscula!";
    }
    if (!preg_match('/[0-9]/', $senha)) {
        return "Necessário ter pelo menos 1 número!";
    }
    return "Senha válida!";
}
echo validarSenha($senha);
?>