<?php
$host= 'localhost';
$dbname= 'phpkiso';
$charset= 'utf8mb4';
$user= 'root';
$password= '';

$dsn= "mysql:host=$host;dbname=$dbname;
charset=$charset";
$dbh= new PDO($dsn,$user,$password);

$sql='SELECT * FROM `survey`';
$stmt= $dbh->prepare($sql);
$stmt->execute();
$surveys=$stmt->fetchAll();

var_dump($surveys);


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
    <h2></h2>
    <p></p>
    <p></p>

    </div>
</body>
</html>