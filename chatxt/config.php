<?php
class Chatbot
{

    function lertxt()
    {
        $perguntas = array();

        $id = 0;

        if (file_exists("save.txt")) {

            $arquivo = fopen('save.txt', 'r');

            while (true) {
                $linha = fgets($arquivo);
                if ($linha == null) break;
                array_push($perguntas, array($id, trim($linha)));
                $id++;
            }
            fclose($arquivo);
        }
    }

    function apagartudo()
    {
        $arquivo = fopen("save.txt", "w");
        fwrite($arquivo, "");
        fclose($arquivo);
    }

    function apagar($id)
    {
        $cont = 0;
        if (file_exists("save.txt")) {

            $arquivo = fopen('save.txt', 'r');

            while (true) {
                $linha = fgets($arquivo);
                if ($linha == null) break;
                if ($cont != $id) {
                    array_push($perguntas, trim($linha));
                }
                $cont++;
            }
            fclose($arquivo);

            $arquivo = fopen("save.txt", "w");
            fwrite($arquivo, "");
            fclose($arquivo);

            $arquivo = fopen("save.txt", "a");

            foreach ($perguntas as $key => $value) {
                fwrite($arquivo, "$value \n");
            }
            fclose($arquivo);

            header('Location: chat.php');
        }
    }
}

function retirarAcentos($string)
{
    $comAcentos = array(
        'à', 'á', 'â', 'ã', 'ä', 'å', 'ç', 'è', 'é', 'ê', 'ë', 'ì', 'í', 'î', 'ï',
        'ñ', 'ò', 'ó', 'ô', 'õ', 'ö', 'ù', 'ü', 'ú', 'ÿ', 'À', 'Á', 'Â', 'Ã', 'Ä',
        'Å', 'Ç', 'È', 'É', 'Ê', 'Ë', 'Ì', 'Í', 'Î', 'Ï', 'Ñ', 'Ò', 'Ó', 'Ô', 'Õ',
        'Ö', 'O', 'Ù', 'Ü', 'Ú', '?', '!', '.'
    );
    $semAcentos = array(
        'a', 'a', 'a', 'a', 'a', 'a', 'c', 'e', 'e', 'e', 'e', 'i', 'i', 'i', 'i',
        'n', 'o', 'o', 'o', 'o', 'o', 'u', 'u', 'u', 'y', 'A', 'A', 'A', 'A', 'A',
        'A', 'C', 'E', 'E', 'E', 'E', 'I', 'I', 'I', 'I', 'N', 'O', 'O', 'O', 'O',
        'O', '0', 'U', 'U', 'U', '', '', ''
    );

    $string = str_replace($comAcentos, $semAcentos, $string);

    return $string;
}
