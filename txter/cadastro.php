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
            <a class="menu-item-select" href="cadastro.php">Cadastro</a>
            <a href="relatorio.php">Relatório</a>
        </div>
    </div>
    
    <div class="formulario">
        <form action="cadastrar.php" method="post">
            <br>
            <br>
            <label for="nome">Nome Completo</label>
            <br>
            <input name="nome" type="text">
            <br>
            <label for="cpf">CPF</label>
            <br>
            <input name="cpf" type="text">
            <br>
            <label for="data">Data de Nascimento</label>
            <br>
            <input name="data" type="data">
            <br>
            <button type="submit">Cadastrar</button>

        </form>
    </div>

</body>

</html>