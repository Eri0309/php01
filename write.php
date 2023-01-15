<?php

// POSTデータ取得
$name = $_POST["name"];
$email = $_POST["email"];
$gender=$_POST["gender"];
$age=$_POST["age"];
$career=$_POST["career"];
$area=$_POST["area"];
$question1=$_POST["question1"];
$question2=$_POST["question2"];
$question3=$_POST["question3"];
$question4=$_POST["question4"];
$free1=$_POST["free1"];
$free2=$_POST["free2"];
$free3=$_POST["free3"];


// 申込時間取得
$date = date("Y/m/d H:i:s");

// ファイルを読み込む
$file = fopen("./data/data.txt","a");
// ファイルに書き込む
fwrite($file,$date." ".$name." ".$email." ".$gender." ".$age." ".$career." ".$area." ".$question1." ".$question2." ".$free1." ".$question3." ".$free2." ".$question4." ".$free3."\n");
// // ファイルを閉じる
fclose($file);

// // read.phpにリダイレクト
header("Location:read.php");
exit();

?>
