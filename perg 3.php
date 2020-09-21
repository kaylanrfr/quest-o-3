<?php

$num = 2;//numero teste
function CalculaArea($num)
{
    $res = pow($num, 2) + pow($num - 1, 2); //eleva ao quadrado o numero e soma com o quadrado do numero menos um
    return "N " . $num . " = " . $res;
}
var_dump(CalculaArea($num));//display basico para teste