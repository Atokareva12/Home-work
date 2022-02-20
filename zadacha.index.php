<!DOCTYPE html>
<html lang="ru">
<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authorization</title>
</head>
<body>
    
    <form action="" method="post">
        <p>Ваше имя <input type="text" name="name"></p>
        <p><input type="submit"></p>
        </form>
     <?php 
        if (!empty($_POST["name"])) {
            echo "Привет ".$_POST["name"];
    } else {  
            echo "Введите имя";
    }
    ?>

</body>
</html>