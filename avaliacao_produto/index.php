<?php

$comentario = null;
$nota = null;

function validarProduto(? string $comentario, ? int $nota){
    if ($comentario === null){
        return "Comentário inválido!";
    }
    if ($comentario === ""){
        return "Comentário vazio!";
    $comentario = trim($comentario);
}
}