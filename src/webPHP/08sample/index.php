<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dbPHP</title>
</head>
<body>
    <?php
        $mysql = new mysqli('localhost', 'root', 'root', 'mydb', 8889);
        if ($mysql->connect_errno){
            die($mysql->connect_errno);
        }
    ?>
</body>
</html>