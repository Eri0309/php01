<?php

// ファイルを読み込む
$file = fopen("./data/data.txt","w");

// ファイルを空にする
ftruncate($file, 0);

// ファイルを閉じる
fclose($file);

// read.phpにリダイレクト
header("Location: read.php");
exit();


?>
