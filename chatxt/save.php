<?php
$pergunta = $_POST["pergunta"];

$pergunta = strtolower($pergunta);
$pergunta = ucfirst($pergunta);
$pergunta = trim($pergunta);


$arquivo = fopen("save.txt", "a");

fwrite($arquivo, "$pergunta \n");

fclose($arquivo);

header('Location: chat.php');