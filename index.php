<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

   <html>
<body>
	<font color="red" size="4">Практическая работа 1</font>
</body>
</html>
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
    $text1 = 'Привет, ';
    $text2 = 'Мир!';
    echo $text1 . $text2;
 ?>
     Ответ:<?=$result ?>  </h2>
     </div>
     <hr>

     <div class="Zadanie">
          <h1>Задание 4</h1>
 Создайте переменную $name и присвойте ей ваше имя. Выведите на
экран фразу 'Привет, %Имя%!'. Вместо %Имя% должно стоять ваше имя. 
</div>
    <div class="Otvet"> 
    <?php
   $name = 'Sasha!';
   echo 'Привет, ', $name,'!';
   ?>
     Ответ:<?=$result ?>  </h2>
     </div>
     <hr>

     <div class="Zadanie">
          <h1>Задание 5</h1>
Создайте переменную $age и присвойте ей ваш возраст. Выведите на
экран 'Мне %Возраст% лет!'.       
     </div>
    <div class="Otvet"> 
    <?php
     $age = 19;
     echo 'Мне ', $age,' лет!';
     ?>
     Ответ:<?=$result ?>  </h2>
 </div>
 <hr>

        <div class="Zadanie">
          <h1>Задание 6</h1>
 Если переменная $a равна 10, то выведите 'Верно', иначе выведите
'Неверно'. 
</div>
    <div class="Otvet"> 
    <?php
	$a = 10;
	if ($a == 10) {
		echo 'Верно';
	} else {
		echo 'Неверно';
	}
?>
     Ответ:<?=$result ?>  </h2>
 </div>
 <hr>

      <div class="Zadanie">
          <h1>Задание 7</h1>
 В переменной $min лежит число от 0 до 59. Определите в
какую четверть часа попадает это число (в первую, вторую, третью или
четвертую). 
</div>
    <div class="Otvet"> 
    <?php
      $min = 10;

       if ($min >= 0 and $min <= 14) {
        echo 'В первую четверть.';
}

       if ($min <= 15 and $min >= 30) {
     echo 'Во вторую четверть.';
}

       if ($min <= 31 and $min >= 45) {
     echo 'В третью четверть.';
}

       if ($min >= 46 and $min <= 59) {
     echo 'В четвертую четверть.';
}
  ?>
        Ответ:<?=$result ?>  </h2>
  </div>
  <hr>


    <div class="Zadanie">
          <h1>Задание 8</h1>
Переменная $num может принимать одно из значений: 1, 2, 3 или 4.
Если она имеет значение '1', то в переменную $result запишем 'зима', если
имеет значение '2' – 'лето' и так далее. Решите задачу через switch-case.
</div>
     <div class="Otvet"> 
     <?php
 $num = 2;
 switch ($num) {
      case 1:
           $result = 'зима';
           echo $result;
           break;
      case 2:
           $result = 'лето';
           echo $result;
           break;
      case 3:
           $result = 'осень';
           echo $result;
           break;
      case 4:
           $result = 'весна';
           echo $result;
           break;		
      default:
           echo "Введите число от 1 до 4 ";
           break;
      }
 
 ?>
      Ответ:<?=$result ?>  </h2>
  </div>
  <hr>


  <dif class="Zadanie">
          <h1>Задание 9</h1>
Дана строка с цифрами, например, '12345'. Проверьте, что первым
символом этой строки является цифра 1, 2 или 3. Если это так - выведите 'да',
в противном случае выведите 'нет'. 
</div>
     <div class="Otvet"> 
     <?php
$strNum = '12345';
$res = ($strNum[0] == 1 || $strNum[0] == 2 || $strNum[0] == 3) ? 'Да' : 'Нет';
echo $res;
?>
      Ответ:<?=$result ?>  </h2>
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
     <?php
    $year = 1700;

    if ($year % 400 == 0) {
    echo "$year год - Высокосный";
} else {
    echo "$year год - Не высокосный";
}
?>
      Ответ:<?=$result ?>  </h2>
  </div>
  <hr>


        <diм class="Zadanie">
          <h1>Задание 11</h1>
 В переменной $month лежит какое-то число из интервала от 1 до 12.
Определите в какую пору года попадает этот месяц (зима, лето, весна, осень). 
</div>
     <div class="Otvet"> 
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
      Ответ:<?=$result ?>  </h2>
  </div>
  <hr>

         <div class="Zadanie">
          <h1>Задание 12</h1>
Выведите столбец чисел от 1 до 100.
</div>
var i = 1; /* Создаём переменную i - это счётчик */

while (i <= 100) /* Пока i меньше или равно 100 - Выполняем действие */

{

document.write(i + "<br />"); /* Выводим на экран значение счётчика */

i = i + 1; /* Прибавляем к значению счётчика единицу */

}

</script>
?>
     Ответ:<?=$result ?>  </h2>
 </div>
 <hr>


          <div class="Zadanie">
          <h1>Задание 13</h1>
 Выведите столбец чисел от 11 до 33. 
 </div>
     <div class="Otvet"> 
     <?php
      $min=11;
      $max=33;
       $s=range($min,$max);
    
     for ($i=$min; $i<=$max; $i++){
         print "<br>";
         print $min+=$s[$i];
     }


?>
     Ответ:<?=$result ?>  </h2>
 </div>
 <hr>

           <div class="Zadanie">
          <h1>Задание 14</h1>
 Выведите столбец четных чисел в промежутке от 0 до 100. 
 </div>
     <div class="Otvet"> 
     <?php
  $a=1;
  do {
  if ($x % 2 === 0) echo $x.'';
  } while ( $x++ < 100 );
?>
     Ответ:<?=$result ?> </h2> 
 </div>


      <div class="Zadanie">
          <h1>Задание 15</h1>
С помощью цикла найдите сумму чисел от 1 до 100.
</div>
     <div class="Otvet"> 
     <?php
  $min=1;
  $max=100;
   $s=range($min,$max);

 for ($i=$min; $i<=$max; $i++){
     print "<br>";
     print $min+=$s[$i];
 }
   ?>
     Ответ:<?=$result ?>  </h2>
 </div>  
 <hr>




<h1 align="center">
     часть вторая
    </h1>

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

    <div class="Zadanie">
        <h1>
            Задание 5
        </h1>
        


        
    </div>

    <div class="Otvet">
        <h3>
            <?php
            
            ?>
        </h3>
    </div>



</body>
</html>


