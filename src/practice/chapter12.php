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
    <h1>繰り返し処理について<br></h1>
    <h2>
        <?php
            //breakとcontinue
            $nums = [12, 3, 45, 122, 6, -9, 98, 33];

            //配列の数を取得
            $numsLen = count($nums);

            for ($i = 0; $i < $numsLen; $i++) {
                $value = $nums[$i];
                if ($value < 0) {
                    echo "含まれています: {$value}<br>";
                    break;
                }
            }
            
            $sum = 0;
            for ($i = 0; $i < $numsLen; $i++) {
                $value = $nums[$i];
                if ($value % 2 === 1) {
                    continue;
                }
                $sum += $value;
            }
            echo $sum;

            //while文

            $roop = 1;
            do {
                echo "はじめの{$roop}回";
                $roop++;
            } while (FALSE);

            //foreach
            foreach ($nums as $num) {
                echo $num * $num;
                echo '<br>';
            }

            $fruits = [
                'apple' => 3,
                'banana' => 4
            ];

            foreach ($fruits as $key => $value) {
                echo "{$key}: {$value}";
                echo '<br>';
            }
        ?>
    </h1>
</body>
</html>