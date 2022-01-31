<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
     <dif class="Zadanie">
          <h2>Задание 1</h2>
          Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и
результат присвойте переменной $c. Затем создайте переменную $d,
присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите
в переменную $result. Выведите на экран значение переменной $result. 
     </dif>
    <dif class="Otvet">

    <?php
         $a=17;
         $b=10;
         $c=$a-$b;
         $d=7;
         $result=$c+$d;
    ?>    
         Ответ: <?=$result ?>   
    </dif>

    <dif class="Zadanie">
          <h2>Задание 2</h2>
      Создайте переменные $c=15 и $d=2. Просуммируйте их, а результат
присвойте переменной $result. Выведите на экран значение
переменной $result. 
</div>
<div class="Otvet">

      <?php
          $c=15;
          $d=2;
          $result=$c+$d;
     ?>
     Ответ:<?=$result ?>  
     </div>


     <dif class="Zadanie">
          <h2>Задание 3</h2>
      Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих
переменных и операции сложения строк выведите на экран фразу 'Привет,
Мир!'. 
    </div>
    <div class="Otvet"> 
    <?php
    $text1 = 'Привет, ';
    $text2 = 'Мир!';
    echo $text1 . $text2;
 ?>
     Ответ:<?=$result ?>  
     </div>

     <dif class="Zadanie">
          <h2>Задание 4</h2>
 Создайте переменную $name и присвойте ей ваше имя. Выведите на
экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. 
</div>
    <div class="Otvet"> 
    <?php
   $name = 'Sasha!';
   echo 'Привет, ', $name,'!';
   ?>
     Ответ:<?=$result ?>  
     </div>

     <dif class="Zadanie">
          <h2>Задание 5</h2>
Создайте переменную $age и присвойте ей ваш возраст. Выведите на
экран 'Мне %Возраст% лет!'.       
     </div>
    <div class="Otvet"> 
    <?php
     $age = 19;
     echo 'Мне ', $age,' лет!';
     ?>
     Ответ:<?=$result ?>  
 </div>

 

     

