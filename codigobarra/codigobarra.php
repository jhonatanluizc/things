<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Código de Barras</title>
    <link rel="stylesheet" href="style.css">

</head>

<body>

    <div class="menu">
        <div class="menu-itens">
            <a href="index.php">Exercício</a>
            <a class="menu-item-select" href="codigobarra.php">&nbsp;&nbsp;Verificador&nbsp;&nbsp;</a>
        </div>
    </div>

    <br>

    <div class="chat">
        <div class="chat-top">
            <div class="title">
                <b>Verificador de código de barras</b>
            </div>
        </div>
        <br>
        <div class="chat-mid">

            <?php
            if (isset($_POST['code'])) {
                require_once("verificador.php");
                $codigo = new Codigo();
                if ($codigo->verificar($_POST['code'])) { ?>
                    <div class="user">
                        <p><?= $_POST['code'] ?></p>
                    </div>
                    <div class="bot">
                        <p>É um código válido</p>
                    </div>
                <?php } else { ?>
                    <div class="user">
                        <p><?= $_POST['code'] ?></p>
                    </div>
                    <div class="bot">
                        <p>É um código inválido</p>
                    </div>
                <?php }
            } else { ?>
                <div class="bot">
                    <p>Entre com o código de barras ...</p>
                </div>
            <?php } ?>
        </div>

        <br>
        <div class="chat-bottom">
            <form method="post" action="codigobarra.php">
                <input name="code" type="text" required>
                <button type="submit">Enviar</button>
            </form>
        </div>

    </div>

</body>

</html>