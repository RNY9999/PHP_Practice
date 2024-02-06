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
    <h1>
        <?php
            echo '基本の型４種類<br>';
            echo '1. 文字列型<br>';
            echo '&emsp;・文字列の演算<br>';
            echo 'echo "String1" . "String2";<br>';
            echo '=>' . 'String1' . 'String2<br><br>';

            echo '2. 少数型<br>';
            echo '&emsp;・少数型の演算<br>';
            echo 'echo 100 - 99.6;<br>';
            echo '=>' . 100 - 99.6 . '<br><br>';
            
            echo '3. Boolean<br>';
            echo '$t = TRUE(1)<br>';
            echo '$f = FALSE(0)<br>';
            $t = TRUE;
            $f = FALSE;

        ?>
    </h1>
</body>
</html>