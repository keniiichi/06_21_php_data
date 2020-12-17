<?php
//データの受取
$name = $_POST["name"];         
$emai = $_POST["email"];
$address = $_POST["address"];
$tel = $_POST["tel"];
//データの書き込み
$write_data = "{$name} {$emai} {$address} {$tel}\n"; //スペースで区切る 最後は改行
//書き込み先のファイルを開く
$file = fopen("data/data.csv", "a");  //引数はa
//他の人が書き込まないようにファイルをロック
flock($file, LOCK_EX);
//データを書き込む
fwrite($file, $write_data);
//ロックを解除する
flock($file, LOCK_UN);
//ファイルを閉じる
fclose($file);
//入力画面にもどる
header("Location:customer_input.php");
