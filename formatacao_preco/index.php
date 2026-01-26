<?php

//FORMATAÇÃO DE PREÇO

function validarValor(? float $produto): string{
    if($produto === null || $produto <= 0){
        return "R$ 0";
    }
    
    return "R$ " . number_format($produto,0,",",".");
}

echo validarValor(-1);

?>