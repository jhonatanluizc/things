<?php

$data = array();
if (file_exists("save.txt")) {
    $arquivo = fopen('save.txt', 'r');

    while (true) {
        $linha = fgets($arquivo);
        if ($linha == null) break;

        $linha = explode(', ', $linha);
        $linha = array(
            "nome" => $linha[0],
            "cpf" => $linha[1],
            "data" => $linha[2]
        );
        array_push($data, $linha);
    }
    fclose($arquivo);
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Txter</title>
    <link rel="stylesheet" href="style.css">

</head>



<body>
    <div class="menu">
        <div class="menu-itens">
            <a href="index.php">Exercício</a>
            <a href="cadastro.php">Cadastro</a>
            <a class="menu-item-select" href="relatorio.php">Relatório</a>
        </div>
    </div>

    <div class="tabela">
        <table>
            <thead>
                <tr>
                    <td>Nome Completo</td>
                    <td>CPF</td>
                    <td>Data de Nascimento</td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $key => $value) { ?>
                    <tr>
                        <td><?= $value['nome'] ?></td>
                        <td><?= $value['cpf'] ?></td>
                        <td><?= $value['data'] ?></td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    </div>

</body>

</html>