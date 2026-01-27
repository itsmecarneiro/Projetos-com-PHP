<?php
$Texto = null;

function validarTexto(? string $texto) {
    if ($texto === null) {
        return 'Texto inválido!';
}

$textoLimpo = trim(strip_tags($texto));

    if ($textoLimpo === ''){
        return 'Texto Inválido!';
    }

    $tamanho = mb_strlen($textoLimpo);

    if ($tamanho <10) {
        return 'Texto muito curto!';
    } elseif ($tamanho <= 200) {
        return 'Texto válido!';
    }
    return 'Texto muito longo';
}

echo validarTexto($Texto);

?>