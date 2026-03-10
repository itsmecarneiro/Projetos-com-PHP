<?php

function validarComentario(?string $comentario)
{
    if ($comentario === null) {
        return "Comentário inválido!";
    }
    if ($comentario === "") {
        return "Comentário vazio!";
    }
    $comentariolimpo = trim(strip_tags($comentario)); //função para limpar o texto
    $tamanho = mb_strlen($comentariolimpo); //função que conta os caracteres
    if ($tamanho < 5) {
        return "Comentário mínimo de 5 caracteres!";
    }
    if ($tamanho > 300) {
        return "Comentário máximo de 300 caracteres!";
    }
    return "Comentário válido!";
}

function validarNota(?int $nota)
{
    if ($nota === null) {
        return "Nota inválida!";
    }
    if ($nota < 1 || $nota > 5) {
        return "Nota deve ser de 1 a 5!";
    }
    return "Nota válida!";
}

function classificarNota(?int $nota)
{
    if ($nota === 5) {
        return "Excelente";
    }
    if ($nota === 4) {
        return "Muito bom";
    }
    if ($nota === 3) {
        return "Bom";
    }
    if ($nota === 2) {
        return "Ruim";
    }
    return "Péssimo";
}

function validarEmail(?string $email)
{
    if ($email === null) {
        return "Email inválido!";
    }
    $email = trim(strip_tags($email));
    if ($email === "") {
        return "Email vazio!";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Email inválido!";
    }
    return "Email válido!";
}
?>