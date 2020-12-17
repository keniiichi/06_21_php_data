<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>顧客管理（入力画面）</title>
</head>

<body>
    <!-- formにはaction, method, nameを設定！ -->
    <form action="customer_create.php" method="POST">
        <fieldset>
            <legend>お客様情報（入力画面）</legend>
            <a href="customer_read.php">一覧画面</a>
            <div>
                お名前（name）: <input type="text" name="name">
            </div>
            <div>
                メール（email）: <input type="email" name="email">
            </div>
            <div>
                住所（address）: <input type="text" name="address">
            </div>
            <div>
                電話番号（tel）: <input type="tel" name="tel">
            </div>
            <br>
            <div>
                <button>登録する</button>
            </div>
        </fieldset>
    </form>

</body>

</html>