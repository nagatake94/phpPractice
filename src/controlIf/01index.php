<?php

echo "数字を入力してください";
$num = trim(fgets(STDIN));

if ($num >10){
    echo '10よりも大きいです';
} elseif ($num <= 10){
    echo '10よりも小さいです';
}

// if ($num >10):
//     echo '10よりも大きいです';
// elseif ($num <= 10):
//     echo '10よりも小さいです';
// endif





?>