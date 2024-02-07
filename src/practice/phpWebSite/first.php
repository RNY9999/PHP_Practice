<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../css/style.css">
    <title>Document</title>
</head>
<body>
    <a href="../../index.php">戻る</a>
    <h1>PHPでつくる初めてのWEBサイト<br></h1>
    <p><?php echo 'Hello World!' ?></p>
    <!-- phpとechoを省略して=で書ける -->
    <p><?=  'php' ?></p>

    <p>
        <?php
            $greet = 'hai you';
            echo $greet;
            echo '<br>';

            $users = ['renya', 'sample', 'sakana'];
            echo $users[1];
            echo '<br>';

            foreach ($users as $user) {
                echo $user;
                echo '<br>';
            }

            //標準関数 return index || false
            $isExist = array_search('sakana', $users);
            var_dump($isExist);

            //GET => URLにデータが入っている textのみ
            //POSt => 見えないようにデータを送る　画像等も送れる、送れるデータ量に制限がない

            // $_GET[] || $_POST[]

            // セッション=>ユーザーデータを一時的に保存
            //永久に保存したいときはデータベースを使う
            
        ?>
    </p>

    <a href="./kyomutter/kyomutter.php">虚無ったー</a>

</body>
</html>