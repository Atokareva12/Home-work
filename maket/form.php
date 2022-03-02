<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylecheet' href="css/bootstrap.css">
    <link rel='stylecheet' href="css/style.css">

    <title>Document</title>
</head>
<body>
    <p> Введите имя </p>
    <form action="form.php" method="POST">
    Имя: <input type= "text" name="log">
</form>
<?php
if (isset ($_POST) ['Log'] ) ){
    if (empty($_POST) ['Log'] ){
    echo "Привет,".$_POST ['Log'];
}else{
    echo "Введите имя иначе нет входа";
     }
}
<?
</body>
</html>