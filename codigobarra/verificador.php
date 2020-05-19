<?php

class Codigo
{

    function verificar($code)
    {
        if (strlen($code) != 13 || !is_numeric($code)) {
            return false;
        }
        $num = array(
            "1" => $code[0] * 1,
            "2" => $code[1] * 3,
            "3" => $code[2] * 1,
            "4" => $code[3] * 3,
            "5" => $code[4] * 1,
            "6" => $code[5] * 3,
            "7" => $code[6] * 1,
            "8" => $code[7] * 3,
            "9" => $code[8] * 1,
            "10" => $code[9] * 3,
            "11" => $code[10] * 1,
            "12" => $code[11] * 3,
            "0" => $code[12]
        );

        $soma = 0;

        for ($i = 1; $i < 13; $i++) {
            $soma += $num["$i"];
        }

        $verify = ((floor($soma / 10) + 1) * 10) - $soma;

        if ($verify == $num[0]) {
            return true;
        } else {
            return false;
        }
    }
}
