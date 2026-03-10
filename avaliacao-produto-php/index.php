<?php

require_once 'funcoes.php';

$Comentario = "Produto muito bom!";
$Nota = 4;
$Email = "cliente@email.com";

$resultadoComentario = validarComentario($Comentario);
$resultadoNota = validarNota($Nota);
$resultadoEmail = validarEmail($Email);

if ($resultadoComentario !== "Comentário válido!"){
    echo $resultadoComentario;
    exit;
}

?>
