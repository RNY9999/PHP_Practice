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
            //NULLについて
            $emp = NULL;
            if (!$emp) {
                echo 'this is NULL<br>';
            }
            //キャスト演算子
            echo var_dump($emp);
            echo '<br>';

            $num = 10;
            echo var_dump($num);
            echo '<br>';

            $num = (string)$num;
            echo var_dump($num);
            echo '<br>';

            // 暗黙の型変換
            $strNum = '10' + '10';
            echo $strNum;
        ?>
    </h1>
</body>
</html>