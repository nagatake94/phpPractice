<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>webPHP</title>
</head>
<body>
    <?php $sum = 1+10;?>
    <?php if($sum >10): ?>
        <?php echo '10よりも大きいです'; ?>
    <?php endif;?> 

    <?php for($i=0; $i<10; $i++): ?>
        <p><?php echo $i; ?></p>
    <?php endfor; ?>
</body>
</html>