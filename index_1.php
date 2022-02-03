<!DOCTYPE html>
<html lang="ru">
<head>
 <meta charset="utf-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <title>Bootstrap Template</title>
<!-- Bootstrap -->
<link href="style/css/bootstrap.css" rel="stylesheet">
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media
queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]--> 
<style>
.col-md-1, .col-md-2, .col-md-3, .col-md-4, .col-md-5, .col-md-6, .col-md-7, .colmd-8, .col-md-9, .col-md-10, .col-md-11, .col-md-12
{
border:1px solid #ccc;
height:60px;
text-align:center;
}
</style>
</head>
<body>
<div class="container">
<!-- 1 строка Шапка сайта -
Двенадцать колонок слиты в одну на всех устройствах-->
<div class="row">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">Шапка сайта</div>
</div>
<!-- 2 строка Левое меню и контент -
На устройствах меньше 768px - 12 колонок в одну строку, срабатывает стиль
col-xs-12
На устройствах от 768px и выше - два столбца, по 3 и 9 слитных колонок
соответственно,
срабатывают стили col-sm-3 col-md-3 col-lg-3
-->
<div class="row">
<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">Левое меню</div>
<div class="col-xs-12 col-sm-9 col-md-9 col-lg-9">Контент</div>
</div>
<!-- 3 строка Подвал сайта - на всех устройствах поделен на две части по
шесть колонок--> 
<div class="row">
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Левая часть подвала</div> <!-
-Шесть колонок слиты в одну-->
<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">Правая часть подвала</div>
<!--Шесть колонок слиты в одну-->
</div>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script
src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="bootstrap/js/bootstrap.js"></script>
</body>
</html> 
