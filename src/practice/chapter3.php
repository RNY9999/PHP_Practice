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
            $num1 = 0;
            $num2 = 1;
            for ($i = 0; $i < 40; $i++) {
                echo $num1 + $num2;
                echo '<br>';
                $tmp = $num1;
                $num1 = $num2;
                $num2 += $tmp;
            }
        ?>
    </h1>
</body>
</html>