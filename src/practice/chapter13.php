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
    <h1>関数について<br></h1>
    <h2>
        <?php
            //ビルドイン関数
            $arr = [1, 2, 3, 4, 5];
            $arr_len = count($arr);
            echo $arr_len;
            echo '<br>';

            //関数
            function add($num1, $num2) {
                return $num1 * $num2;
            }

            $addNum = add(2, 3);
            echo $addNum;
        ?>
    </h1>
</body>
</html>