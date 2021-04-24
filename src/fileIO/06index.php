<?php
try{
    $file = new SplFileObject('notfound/log.txt', 'w');
} catch (Exception $exception){
    //echo 'ファイルを作成できませんでした';
    //exit();
    die('ファイルを作成できませんでした');
}


$file->fwrite('ログです');