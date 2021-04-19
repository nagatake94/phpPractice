<?php
// $color = ['赤','青','緑'];
// array_shift($color);
// print_r($color);

// $price = 10000;
// $new_price = number_format($price);
// echo $price, "\n";
// echo $new_price;


//配列の先頭に文字を繋げる
function add_head(&$target){
    for($i=0; $i<count($target); $i++){
        $target[$i] = '●' . $target[$i];
    }
}

$color = ['赤','青','緑'];
add_head($color);
print_r($color);
add_head($color);
print_r($color);