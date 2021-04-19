<?php
declare(strict_types=1);
$tax=10;

//足し算をする関数
function sum(int$a, int$b):int {
    global $tax;
    $ret = ($a + $b) * ($tax/100+1);
    return $ret;
}

$num1 = 1000;
$num2 = 2000;

$answer = sum($num1, $num2);
echo $answer;

 