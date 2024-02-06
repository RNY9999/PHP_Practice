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
    <h1>クラスとオブジェクトについて<br></h1>
    <h2>
        <?php
            //Class camelcase
            class Human {
                //プロパティ、メンバ変数、インスタンス変数？
                //基本private
                private $name;
                private $birthday;
                private $gender;

                // constructor
                public function __construct($name, $birthday, $gender) {
                    $this->name = $name;
                    $this->birthday = $birthday;
                    $this->gender = $gender;
                }

                //mehod
                public function walk() {
                    echo "{$this->name}は歩きます<br>";
                }

                public function eat() {
                    echo "誕生日: {$this->birthday}<br>性別: {$this->gender}<br>";
                }
            }

            //construnctor

            $human = new Human('renya', '0906', '男');
            $human->eat();
            $human->walk();
        ?>
    </h1>
</body>
</html>