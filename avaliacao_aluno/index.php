<?php
$Nota1 = null;
$Nota2 = null;

function validarNota(? int $nota1, ? int $nota2){
    if ($nota1 === null || $nota2 === null) {
        return "Nota inexistente!";
    }
    if ($nota1 >10 AND $nota2 >10 AND $nota1 <0 AND $nota2 <0){
        return "Nota inválida!";
    }
    $media = ($nota1 + $nota2)/2;
    if ($media > 6){
        return "APROVADOOOO!";
    }
        return "Reprovado.";
}
$validacao = validarNota($Nota1, $Nota2);

echo $validacao;
?>