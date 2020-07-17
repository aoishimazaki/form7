<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" 
          content="width=device-width, initial-scale=1.0">
    <title>お問い合わせ</title>
</head>
<body>
    <h1>お問い合わせ情報入力</h1>
    <form action="check.php" method="post">
       <div>
         ニックネーム<br>
         <input type="text"
         style="width : 100px;" 
         name = "nickname">
       </div>
        <div>
        メールアドレス<br>
         <input type="email"
         style="width : 200px;" 
         name = "email">
       </div>
       <div>
        お問い合わせ内容<br>
        <textarea name="content" 
        cols="70" rows="5"></textarea>
       </div>
       <input type="submit" value="送信">
    </form>

</body>
</html>