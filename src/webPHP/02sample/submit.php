<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php if(isset($_POST['message'])) {?>
    <p><?php echo htmlspecialchars($_REQUEST['message'], ENT_QUOTES | ENT_HTML5); ?></p>
    <?php }?>
</body>
</html>