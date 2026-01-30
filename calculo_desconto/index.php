<?php

$valorProduto = null;
$Quantidade = null;

function calculoDesconto(?float $valorProduto, ?int $quantidade)
{
    if ($quantidade === null || $valorProduto === null) {
        return "Dados inválidos!";
    }
    if ($quantidade <= 0 || $valorProduto <= 0) {
        return " Valores inválidos!";
    }

    $total = $valorProduto * $quantidade;

    if ($total >= 200) {
        $desconto = 0.15;
    } elseif ($total >= 100) {
        $desconto = 0.10;
    } else {
        $desconto = 0;
    }

    $valorFinal = $total - ($total * $desconto);

    return "Total: R$ $total | Desconto: " . ($desconto * 100) . "% | Valor Final: R$ $valorFinal";
}

echo calculoDesconto($valorProduto, $Quantidade);

?>