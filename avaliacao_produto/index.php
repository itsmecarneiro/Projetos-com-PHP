<?php
$comentario = "Bom! Aqui esta o resultado!";
$nota = 1;

function validarComentario(?string $comentario)
{
    if ($comentario === null) {
        return "Comentário inválido!";
    }
    $comentario = trim(strip_tags($comentario));
    if ($comentario === "") {
        return "Comentário vazio!";
    }
    $tamanho = mb_strlen($comentario);
    if ($tamanho < 5) {
        return "Comentário muito curto!";
    }
    if ($tamanho > 300) {
        return "Comentário muito longo!";
    }
    return "Comentário válido!";
}

function validarNota(?int $nota)
{
    if ($nota === null) {
        return "Nota inválida!";
    }
    if ($nota < 1 || $nota > 5) {
        return "Nota fora do intervalo!";
    }
    return "Nota válida!";
}

function classificarAvaliacao(int $nota): string
{
    if ($nota === 5) {
        return "Excelente!";
    }
    if ($nota === 4) {
        return "Muito bom!";
    }
    if ($nota === 3) {
        return "Bom!";
    }
    if ($nota === 2) {
        return "Ruim";
    }
    return "Péssimo";
}

$resultadoComentario = validarComentario($comentario);

if ($resultadoComentario !== "Comentário válido!") {
    echo $resultadoComentario;
    exit;
}

$resultadoNota = validarNota($nota);

if ($resultadoNota !== "Nota válida!") {
    echo $resultadoNota;
    exit;
}

echo "Comentário: " . $comentario . PHP_EOL;
echo "Nota: " . $nota . PHP_EOL;
echo "Classificação: " . classificarAvaliacao($nota);
