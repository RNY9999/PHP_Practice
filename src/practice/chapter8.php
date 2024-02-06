<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>
<body>
    <a href="../">戻る</a>
    <h2>
        <?php
            //if-else文
            $num = 0;
            if ($num > 0) {
                echo 'プラスです';
            } else if ($num < 0) {
                echo 'マイナスです';
            } else {
                echo '0';
            }
        ?>
    </h1>
</body>
</html>