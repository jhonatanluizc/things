<?php

require_once("config.php");

require_once("bot.php");

$perguntas = array();

if (file_exists("save.txt")) {

    $arquivo = fopen('save.txt', 'r');

    while (true) {
        $linha = fgets($arquivo);
        if ($linha == null) break;
        array_push($perguntas, trim($linha));
    }
    fclose($arquivo);
}

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChaTxt</title>
    <link rel="stylesheet" href="style.css">

</head>
<script>
    function scroll() {
        var objScrDiv = document.getElementById("mensagens");
        objScrDiv.scrollTop = objScrDiv.scrollHeight;
    }
</script>


<body onload="scroll();">

    <div class="menu">
        <div class="menu-itens">
            <a href="index.php">Exercício</a>
            <a class="menu-item-select" href="chat.php">&nbsp;&nbsp;C H A T&nbsp;&nbsp;</a>
        </div>
    </div>

    <br>

    <div class="chat">
        <div class="chat-top">
            <a href="apagartudo.php"><button>Apagar todo o Chat</button></a>
        </div>
        <br>
        <div id="mensagens" class="chat-mid">
            <?php
            $cont = 0;
            foreach ($perguntas as $key => $value) {

                $msg = strtolower($value);
                $msgBot = strtolower($value);
                $msgBot = retirarAcentos($msgBot);

                if (isset($bot["$msgBot"])) { ?>
                    <div class="user">
                        <a href="apagar.php?id=<?= $cont ?>"><img src="icon-delete.png" alt=""></a>
                        <p><?= ucfirst($msg) ?></p>
                    </div>
                    <div class="bot">
                        <a href="apagar.php?id=<?= $cont ?>"><img src="icon-delete.png" alt=""></a>
                        <p><?= ucfirst($bot["$msgBot"]) ?></p>
                    </div>
                <?php } else { ?>
                    <div class="user">
                        <a href="apagar.php?id=<?= $cont ?>"><img src="icon-delete.png" alt=""></a>
                        <p><?= ucfirst($msg) ?></p>
                    </div>
                    <div class="bot">
                        <a href="apagar.php?id=<?= $cont ?>"><img src="icon-delete.png" alt=""></a>
                        <p><?= "Ops, nenhuma mensagem correspondente" ?></p>
                    </div>
                <?php }
                $cont++;
            }
            if ($cont == 0) {
                ?>
                <div class="bot">
                    <p>Comece uma conversa ...</p>
                </div>
            <?php
            }
            ?>


        </div>

        <br>
        <div class="chat-bottom">
            <form method="post" action="save.php">
                <textarea name="pergunta" id="" rows="1" maxlength="50"></textarea>
                <button type="submit">Enviar</button>
            </form>
        </div>

    </div>

</body>

</html>