<?php
session_start();
if (!isset($_SESSION['tweets'])) {
    $_SESSION['tweets'] = [];
}
if (isset($_POST['tweet']) && $_POST['tweet'] !== '') {
    $_SESSION['tweets'][] = $_POST['tweet'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>虚無ったー</title>
</head>
<body>
    <h1>虚無ったー</h1>
    <form action="kyomutter.php" method="post">
        <textarea name="tweet" id="tweet" cols="30" rows="10"></textarea>
        <button>虚無</button>
    </form>
    <?php
    foreach ($_SESSION['tweets'] as $tweet) {
    ?>
    <p><?= $tweet ?></p>
    <?php
    }
    ?>
</body>
</html>