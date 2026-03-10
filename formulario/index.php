<form method="POST">

<input type="text" name="nome" placeholder="Seu nome">
<br><br>

<input type="text" name="materia" placeholder="Matéria">
<br><br>

<button type="submit">Enviar</button>

</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

$nome = $_POST["nome"];
$materia = $_POST["materia"];

echo "Olá $nome, você está estudando $materia para virar freelancer!";

}

?>