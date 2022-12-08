
<?php

$name = $_POST['name'];
$email = $_POST['email'];
$birthPlace = $_POST['birthPlace'];
$sex = $_POST['sex'];
$youbou = $_POST['youbou'];


$time = date('Y-m-d H:i:s');
// ファイルに書き込み
$file = fopen('data/data.txt', 'a');
fwrite($file, $time . $name .$email. $birthPlace . $sex. $youbou. "\n");
fclose($file);

//文字作成

?>

<html>

<head>
    <meta charset="utf-8">
    <title>File書き込み</title>
</head>

<body>

    <h2>書き込みの確認</h2>

    <ul>
        <li><a href="read.php">確認する</a></li>
        <li><a href="input.php">戻る</a></li>
    </ul>
</body>

</html>
