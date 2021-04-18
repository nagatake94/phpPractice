<?php

$color = ['黒','白','赤'];
//echo count($color);

//array_unshift($color, '緑','黄');
//array_push($color, '緑','黄');

//array_shift - array_pop
// $mycolor = array_shift($color);
// echo $mycolor;

// print_r($color);

 $color_string = implode(',', $color);
 $colorArray = explode(',', $color_string);

 print($color_string);
 print_r($colorArray);


