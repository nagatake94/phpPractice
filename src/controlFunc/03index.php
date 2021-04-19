<?php
//足し算をする関数
//可変パラメータ
function sum(...$numbers){
    $answer = 0;
    foreach ($numbers as $num){
        $answer += $num;
    }

    return $answer;
}

$item_sum = sum(10,20,30,94,4239057439);
echo $item_sum;
