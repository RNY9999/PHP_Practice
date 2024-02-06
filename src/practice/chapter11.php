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
    <h1>連想配列について<br></h1>
    <h2>
        <?php
            //for文
            for ($i = 0; $i < 10; $i++) {
                $message = $i % 2 === 0 ? '偶数' : '奇数';
                echo $message;
                $insert = (string)$i;
                echo "{$insert}回目のこんにちは<br>";
            }
        ?>
    </h1>
</body>
</html>