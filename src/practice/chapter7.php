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
            //if文
            $judge = TRUE;

            if (!$judge) {
                echo 'this is true<br>';
            } else {
                echo 'this is false<br>';
            }

            var_dump(1 < 2);
            var_dump(2 < 1);
            var_dump(1 === '1');
            var_dump(1 == '1');
        ?>
    </h1>
</body>
</html>