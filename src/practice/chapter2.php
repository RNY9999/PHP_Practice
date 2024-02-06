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
        <?php
            // echoの中にタグも書き込める
            echo '<h1>h1タグです</h1>';
            // echoとprintの違い
            echo '<h2>echoです</h2>';
            print('<h2>printです</h2>');

            print "<h3>変数"."<br>"."を使った計算<br>ika</h3>";

            $age = 12;
            echo $age.'才です';
            echo '<br>';
            $age = 13;
            echo $age.'才です';
        ?>
</body>
</html>