<?php
//ファイルの読み込み
//出力用の空の文字列をつくる
$str = "";
//ファイルを開く（読み取り専用 r ）
$file = fopen("data/data.csv", "r");
//ファイルをロック
flock($file, LOCK_EX);
//fgets（）で一行ずつ取得⇒$lineに格納
if ($file) {
    while ($line = fgets($file)) {
        $str .= "<tr><td>{$line}</td></tr>";    //取得したデータを$strに入れる
    }
}
//ファイルのロック解除
flock($file, LOCK_UN);
//ファイルを閉じる
fclose($file);
//（$strに全部の情報が入る）

?>

<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>顧客管理（一覧画面）</title>
</head>

<body>
    <fieldset>
        <legend>お客様情報（一覧画面）</legend>
        <a href="customer_input.php">入力画面</a>
        <table>
            <thead>
                <tr>
                    <th>名前　メール　住所　電話</th>

                </tr>
            </thead>
            <tbody>
                <?= $str ?>
            </tbody>
        </table>
    </fieldset>
</body>

</html>