<?php


echo '色を選んでください（1:黒　2:白　3:赤）　>';
$color = (int)trim(fgets(STDIN));

// if ($color === 1){
//     echo '黒が呼ばれました';
// }

switch ($color){
    case 1:
        echo '黒が呼ばれました';
        break;
    case 2:
        echo '白が呼ばれました';
        break;
    case 3:
        echo '赤が呼ばれました';
        break;
    
        
}

?>