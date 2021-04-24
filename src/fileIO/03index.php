<?php
// //rは標準であるから取り除いてもよい
// $file = new SplFileObject('src/fileIO/item.csv', 'r');

// // while($file->eof() === false){
// //     $item = $file -> fgetcsv();
// //     echo $item[0], "\n";
// // }

// //フラグ処理する

// $file -> setFlags(SplFileObject::READ_CSV);
// foreach($file as $item){
//     echo $item[1], "\n";
// }  