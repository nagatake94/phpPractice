<?php
// $items = [
//     [
//         'name' => 'PHP入門',
//         'price' => 1500
//     ],
//     [
//         'name' => 'JS入門',
//         'price' => 2300
//     ],
//     [
//         'name' => 'Python入門',
//         'price' => 2500
//     ]
// ];

// $json = json_encode($items, JSON_UNESCAPED_UNICODE);
// file_put_contents('src/fileIO/items.json', $json);

//jsonの読み込み
$json = file_get_contents('src/fileIO/items.json');
$items = json_decode($json);
print_r($items);