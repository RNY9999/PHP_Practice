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
            //keyはstring or int
            $Array = [
                'name' => 'hisamatsu renya',
                'age' => 24,
                'tall' => 187,
                'weight' => 89,
            ];

            $Array2 = [
                'stack',
                'apple',
                'suggest',
            ];
            $Array3 = [
                'apple',
                'login',
                'sakura',
            ];

            // var_dump($Array);

            // echo $Array['name'] . '<br>';
            // echo $Array['age'] . '<br>';
            // echo $Array['tall'] . '<br>';
            // echo $Array['weight'] . '<br>';
            // echo $Array2[0] . '<br>';
            // echo $Array2[1] . '<br>';
            // echo $Array2[2] . '<br>';

            $createArray = array_merge($Array2, $Array3);
            print_r($createArray);

            array_unshift($createArray, 'first');
            print_r($createArray);

            $first = array_shift($createArray);
            echo $first;
            print_r($createArray);

            $pop = array_pop($createArray);
            echo $pop;
            print_r($createArray);
        ?>
    </h1>
</body>
</html>