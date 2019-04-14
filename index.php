<?php

$dataFile = 'bbs.dat';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $message = $_POST['message'];
    $user = $_POST['user'];

    $newData = $message . "\t" . $user . "\n";

    $fp = fopen($dataFile, 'a');
    fwrite($fp, $newData);
    fclose($fp);
}

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>簡易掲示板</title>
</head>
<body>
    <h1>簡易掲示板</h1>
    <form action="" method="post">
        message: <input type="text" name="message">
        user: <input type="text" name="user">
        <input type="submit" value="投稿">
    </form>
    <h2>投稿一覧（０件）</h2>
    <ul>
        <li>まだ投稿はありません。</li>
    </ul>
</body>
</html>