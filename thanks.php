<?php
$nickname = $_POST['nickname'];
 $email = $_POST['email'];
 $content = $_POST['content'];

//  echo $nickname;

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>送信完了</title>
</head>

<body>
  <h1>お問い合わせありがとう</h1>
    <div>
    <h3>お問い合わせ内容詳細</h3>
        <p> ニックネーム： <?php echo $nickname; ?></p>
        <p>メールアドレス：<?php echo $email; ?></p>
        <p>お問い合わせ内容：<?php echo $content; ?></p>
    </div>
</body>
</html>