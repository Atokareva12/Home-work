<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1 align="center"> ПРАКТИЧЕСКАЯ РАБОТА </h1>


     <div class="Zadanie">
          <h1>Задание 1</h1>
          Создайте переменные $a=17 и $b=10. Отнимите от $a переменную $b и
результат присвойте переменной $c. Затем создайте переменную $d,
присвойте ей значение 7. Сложите переменные $c и $d, а результат запишите
в переменную $result. Выведите на экран значение переменной $result. 
     </div>
    <div class="Otvet">

    <?php
         $a=17;
         $b=10;
         $c=$a-$b;
         $d=7;
         $result=$c+$d;
    ?>    
         Ответ: <?=$result ?>  </h2>  
    </div>
    <hr>




    <div class="Zadanie">
          <h1>Задание 2</h1>
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
     Ответ:<?=$result ?>   </h2>
     </div>
     <hr>



     <div class="Zadanie">
          <h1>Задание 3</h1>
      Создайте переменные $text1='Привет, ' и $text2='Мир!'. С помощью этих
переменных и операции сложения строк выведите на экран фразу 'Привет,
Мир!'. 
    </div>

    <div class="Otvet">
        <?php
            $text1='Привет, ';
            $text2='Мир!';
        ?>
        <h3>Ответ: <?=$text1.$text2?></h3>
    </div>
     <hr>



     <div class="Zadanie">
          <h1>Задание 4</h1>
 Создайте переменную $name и присвойте ей ваше имя. Выведите на
экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. 
</div>

<div class="Otvet">
    <?php
        $name='Александра'
    ?>
    <h3>Привет, <?=$name?>.</h3>       
</div>
    <hr>




     <div class="Zadanie">
          <h1>Задание 5</h1>
Создайте переменную $age и присвойте ей ваш возраст. Выведите на
экран 'Мне %Возраст% лет!'.       
</div>

<div class="Otvet">
    <?php
        $age='19'
    ?>
    <h3>Мне <?=$age?> лет</h3>
</div>
 <hr>




        <div class="Zadanie">
          <h1>Задание 6</h1>
 Если переменная $a равна 10, то выведите 'Верно', иначе выведите
'Неверно'. 
</div>

    <div class="Otvet">
        <h3><?php            
            $a=11;
            if($a==10){
                echo "Верно";     
            } else {   
                echo "Не верно";
            }?>
        </h3>
    </div>
 <hr>



      <div class="Zadanie">
          <h1>Задание 7</h1>
 В переменной $min лежит число от 0 до 59. Определите в
какую четверть часа попадает это число (в первую, вторую, третью или
четвертую). 
 </div>

    <div class="Otvet">
        <h3>
            <?php
                $min=(rand(0, 59)) ;

                if($min >=0 and $min <=14){
                    echo "Первая";     
                }

                if($min >=15 and $min <=30){
                    echo "Вторая";     
                }

                if($min >=31 and $min <=45){
                    echo "Третья";     
                }

                if($min >=46 and $min <=59){
                    echo "Четвёртая";     
                }
            ?>
        </h3>
    </div>
  <hr>



    <div class="Zadanie">
          <h1>Задание 8</h1>
Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
Если она имеет значение '1', то в переменную $result запишем 'зима', если
имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case.
</div>

<div class="Otvet">
    <h3>
        <?php
        $num=3;
        switch($num){
            case 1;
                    $result = "Зама";
                    echo $result;
                    break;
            case 2;
                    $result = "Весна";
                    echo $result;
                    break;
            case 3;
                    $result = "Лето";
                    echo $result;
                    break;
            case 4;
                    $result = "Осень";
                    echo $result;
                    break; 
            default:
                    echo "Введи число от 1 до 4";
                    break;         
        }
        ?>
    </h3>
</div>
  <hr>



  <dif class="Zadanie">
          <h1>Задание 9</h1>
Дана строка с цифрами, например, '12345'. Проверьте, что первым
символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да',
в противном случае выведите 'нет'. 
</div>

<div class="Otvet">
    <h3>
        <?php
            $strNum = (rand(1,5).rand(1,5));

            $res = ($strNum[0] == 1 || $strNum[0] == 2 || $strNum[0] == 3) ? 'Да' : 'Нет';
            echo $res;
        ?>
    </h3>
</div>
  <hr>



  <diм class="Zadanie">
          <h1>Задание 10</h1>
 В переменной $year хранится год. Определите, является ли
он високосным (в таком году есть 29 февраля). Год будет високосным в двух
случаях: либо он делится на 4, но при этом не делится на 100, либо делится
на 400. Так, годы 1700, 1800 и 1900 не являются високосными, так как они
делятся на 100 и не делятся на 400. Годы 1600 и 2000 - високосные, так как они
делятся на 400.
 </div>

    <div class="Otvet">
        <h3>
            <?php
            $year = 1700;

            if ($year % 400 == 0) {
                echo "$year год - Высокосный";
            } else {
                echo "$year год - Не высокосный";
            }
            ?>
        </h3>
    </div>   
  <hr>



        <diм class="Zadanie">
          <h1>Задание 11</h1>
 В переменной $month лежит какое-то число из интервала от 1 до 12.
Определите в какую пору года попадает этот месяц (зима, лето, весна, осень). 
</div>

<div class="Otvet">
    <h3>
        <?php
        $month = (rand(1, 12)) % 12;
        $season = null;
        
        if ($month >= 0 && $month <= 2) {
            $season = 'Зима';
        } elseif ($month >= 3 && $month <= 5) {
            $season = 'Весна';
        } elseif ($month >= 6 && $month <= 8) {
            $season = 'Лето';
        } else {
            $season = 'Осень';
        }
        echo $season;
        ?>
    </h3>
</div>
  <hr>




         <div class="Zadanie">
          <h1>Задание 12</h1>
Выведите столбец чисел от 1 до 100.
</div>
<div class="Otvet">
        <h3>
            <?php
            for ($i = 1; $i <= 100; $i++) {
                echo $i . "<br>";
            }
            ?>
        </h3>
    </div>
 <hr>




          <div class="Zadanie">
          <h1>Задание 13</h1>
 Выведите столбец чисел от 11 до 33. 
 </div>
     <div class="Otvet"> 
     <?php
      for ($i = 11; $i <= 33; $i++) {
        echo $i . "<br>";
    }
?>
 </div>
 <hr>


           <div class="Zadanie">
          <h1>Задание 14</h1>
 Выведите столбец четных чисел в промежутке от 0 до 100. 
 </div>
     <div class="Otvet"> 
     <?php
  for ($i = 0; $i <= 100; $i++) {
    if (!($i % 2) && $i != 0) {
    echo $i . "<br>";
    }
}
?>
    
 </div>
 <hr>


      <div class="Zadanie">
          <h1>Задание 15</h1>
С помощью цикла найдите сумму чисел от 1 до 100.
</div>
     <div class="Otvet"> 
     <?php
     $sum = 0;
     $i = 1;
     
     do{
         $sum = $sum + $i;
         $i++;
     }
     while($i <= 100);
     echo "Сумма всех чисел от одного до 100 равна $sum";
     ?>
 </h3>
</div>
 <hr>




<h1 align="center">ПРАКТИЧЕСКАЯ РАБОТА ЧАСТЬ 2</h1>


    <div class="Zadanie">
        <h1>
            Задание 1
        </h1>
        Создайте переменные $a, $b и присвойте им положительные 
числа. Присвойте частное от деления $a/$b третьей переменной $d. 
Используя условный оператор if, осуществите схему вывода на экран 
значения переменной $d только в том случае, если оно является 
положительным числом. Проверьте работу скрипта, после чего 
измените одно из значений переменных на отрицательное число и 
снова запустите скрипт. 
    </div>

    <div class="Otvet">
        <h3>
            <?php
            $a=0;
            $b=7;
            $d=$a/$b;
            echo $d;
            if($d>0){
                echo " Число положительное";
            } else {
                echo " Число не положительное";
            }
            ?>
        </h3>
    </div>
    <hr>



    <div class="Zadanie">
        <h1>
            Задание 2
        </h1>
        Создайте переменные $a, $b и присвойте им положительные 
числа. Присвойте частное от деления $a/$b третьей переменной $d. 
Используя условный оператор if, осуществите схему вывода на экран 
значения переменной $d только в том случае, если оно является 
положительным числом. Если число окажется отрицательным или 
равным нулю, должно выводиться соответствующее предупреждение, а 
не значение переменной. Проверьте работу скрипта, после чего 
измените одно из значений переменных $a или $b на отрицательное 
число и снова запустите скрипт.
    </div>

    <div class="Otvet">
        <h3>
            <?php
            $a=5;
            $b=62;
            $d=$a/$b;
            if($d>0){
                echo $d;
                echo " Число положительное";
            } else {
                echo " Число не положительное";
            } 
            ?>
        </h3>
    </div>
 <hr>




    <div class="Zadanie">
        <h1>
            Задание 3
        </h1>
        Создайте переменные $a, $b и присвойте им положительные 
числа. Присвойте частное от деления $a/$b третьей переменной $d. 
Используя условный оператор if, осуществите схему вывода на экран 
значения переменной $d только в том случае, если оно является 
положительным числом. Если число окажется отрицательным или 
равным нулю, должно выводиться соответствующее предупреждение, а 
не значение переменной. Проверьте работу скрипта, после чего 
измените одно из значений переменных $a или $b на отрицательное 
число и снова запустите скрипт.
    </div>

    <div class="Otvet">
        <h3>
            <?php
            $a=5;
            $b=6;
            $d=$a/$b;
            if($d>0){
                echo " Число положительное";
            } elseif($d<=0){
                echo " Число не положительное";
            }
            ?>
        </h3>
    </div>
<<<<<<< HEAD
 <hr>

 
=======
    <hr> 

>>>>>>> 6a52aa91d35ab8b5afc96fb6073d3b1209d08a28
    
    <div class="Zadanie">
        <h1>
            Задание 5
        </h1>
        Используйте цикл for для вывода на экран целых положительных
 чисел не превышающих 50. Прервите цикл на 10 итерации при помощи
 внутреннего условного оператора if и оператора break.
 </div>
    <div class="Otvet">
        <h3>
<?php
for($i = 1; $i <= 50; $i++) {
    if($i === 10) {
        break;
    }
    echo $i;
}
?>
</h3>
    </div>
    <hr>     



<h1 align="center">ПРАКТИЧЕСКАЯ РАБОТА ЧАСТЬ 3</h1>


    <div class="Zadanie">
        <h1>
            Задание 1
        </h1>
        Создайте массив $arr с элементами 2, 5, 3, 9. Умножьте первый элемент
массива на второй, а третий элемент на четвертый. Результаты сложите,
присвойте переменной $result. Выведите на экран значение этой переменной. 
        </div>
<div class="Otvet">
    <h3>
        <?php

$arr = [2, 5, 3, 9];
$result = $arr[0] * $arr[1] + $arr[2] * $arr[3];
echo $result;

?>
</h3>
    </div>
    <hr>  



<div class="Zadanie">
        <h1> Задание 2 </h1>
Заполните массив $arr числами от 1 до 5. Не объявляйте массив, а просто
заполните его присваиванием $arr[] = новое значение. Для выполнения задачи
необходимо использовать цикл. 
</div>
<div class="Otvet">
    <h3>
        <?php
for ($x =1; $x <=5; $x++){
    $arr2[] = $x;
}
?>
</h3>
    </div>
    <hr> 


 <div class="Zadanie">
    <h1> Задание 3 </h1>
    Пусть теперь в переменной $lang хранится язык (она принимает одно из
значений или 'ru', или 'en' - либо то, либо то), а в переменной $day - номер дня.
Выведите словом день недели, соответствующий переменным $lang и $day. То
есть: если, к примеру, $lang = 'ru' и $day = 3 - то выведем 'среда'. 
<br>
    <h3>
<?php

$days=array( 
    'ru' => array (1 => "Понедельник" , 2 => 'Вторник' , 3 => 'Среда' , 4 => 'Четверг' , 5 => 'Пятница', 6 => 'Суббота' 7 => 'Воскресенье') ,
    'en' => array (1 => "Monday", 2 => 'Tuesday', 3 => 'Wednesday' , 4 => 'Thursday' , 5 => 'Friday' , 6 => 'Saturday' , 7 => 'Sunday' ) ) ;

    $lang = 'en';
    $day = 4;
     
    if ( $lang == 'ru') { 
echo $days [ 'ru' ] [$days] ;
} else {
    echo $days [ 'en'] [$day];
}
    ?>
</h3>
    <hr> 


    <div class="Zadanie">
    <h1> Задание 4 </h1>
    $ceu = array("Италия" => "Рим", "Люксембург" => "Люксембург", "Бельгия"
=> "Брюссель", "Дания" => "Копенгаген", "Финляндия" => "Хельсинки",
"Франция "=>"Париж", "Словакия"=>"Братислава", "Словения"=>"Любляна",
"Германия"=>"Берлин", "Греция"=>"Афины", "Ирландия" => "Дублин",
"Нидерланды" => "Амстердам", "Португалия" => "Лиссабон", "Испания" =>
"Мадрид", "Швеция" => "Стокгольм", "Великобритания" => "Лондон",
"Кипр"=>"Никосия", "Литва"=>"Вильнюс", "Чехия"=>"Прага",
"Эстония"=>"Таллин"," Польша "=>"Варшава");

Создайте сценарий PHP, который отображает столицу и название страны из
указанного выше массива $ceu. Отсортируйте список по названиям столиц. 
</div>
<div class="Otvet">
    <h3>
<?php

$ceu = array("Италия" => "Рим", "Люксембург" => "Люксембург", "Бельгия" => "Брюссель", "Дания" => "Копенгаген", "Финляндия" => "Хельсинки", "Франция "=>"Париж", "Словакия"=>"Братислава", "Словения"=>"Любляна", "Германия"=>"Берлин", "Греция"=>"Афины", "Ирландия" => "Дублин", "Нидерланды" => "Амстердам", "Португалия" => "Лиссабон", "Испания" => "Мадрид", "Швеция" => "Стокгольм", "Великобритания" => "Лондон", "Кипр"=>"Никосия", "Литва"=>"Вильнюс", "Чехия"=>"Прага", "Эстония"=>"Таллин"," Польша "=>"Варшава");
asort($ceu);
foreach($ceu as $country => $capital) {
echo "Cтолица $capital - Страна $country"."\n" ;
}

?>
</h3>
    </div>
    <hr> 











</body>
</html>