<?php
$Produto = '   a    Camisa';
$Quantidade = null;
$Preco_unitario = null;

function validarPedido(? string $produto, ? int $quantidade, ? float $preco_unitario) {
    if ($produto === null || $quantidade === null || $preco_unitario === null){
        return "Pedido Inválido";
    }

    $produto = trim(strip_tags(trim($produto)));

     if ($produto === ""){
        return "Não existe!";
     }
     if ($quantidade <=0 || $preco_unitario <=0){
        return "Nada Comprado!";
     }

     return $quantidade * $preco_unitario;
}

function validarBeneficio(float $total){
    if ($total >= 100){
        return "Pedido Aprovado com Desconto!";
    }
    return "Pedido Aprovado sem Desconto";
}

$resultado = validarPedido($Produto, $Quantidade, $Preco_unitario);
if (is_string($resultado)){
    echo $resultado;
 }else {
    echo 'Total: R$ ' . number_format($resultado, 0, ',', '.') . PHP_EOL;
    echo validarBeneficio($resultado);
    }
?>
