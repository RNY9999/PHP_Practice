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
            //連想配列
            $Array = [
                'name' => 'hisamatsu renya',
                'age' => 24,
                'tall' => 187,
                'weight' => 89,
            ];

            // var_dump($Array);

            echo $Array['name'] . '<br>';
            echo $Array['age'] . '<br>';
            echo $Array['tall'] . '<br>';
            echo $Array['weight'] . '<br>';
        ?>
    </h1>
</body>
</html>