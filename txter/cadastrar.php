<?php
$nome = $_POST["nome"];
$cpf = $_POST["cpf"];
$data = $_POST["data"];

$arquivo = fopen("save.txt", "a");

fwrite($arquivo, "$nome, $cpf, $data \n");
fclose($arquivo);

header('Location: index.php');