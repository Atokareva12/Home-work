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

        <dif class="Zadanie">
          <h2>Задание 6</h2>
 Если переменная $a равна 10, то выведите 'Верно', иначе выведите
'Неверно'. 
</div>
    <div class="Otvet"> 
    <?php
     var num = 10;
     if (num == 10) {
	alert('Верно');
} else {
	alert('Неверно');
}
?>
     Ответ:<?=$result ?>  
 </div>

      <dif class="Zadanie">
          <h2>Задание 7</h2>
 В переменной $min лежит число от 0 до 59. Определите в
какую четверть часа попадает это число (в первую, вторую, третью или
четвертую). 
</div>
    <div class="Otvet"> 
    <?php
    let min=+prompt("Введите число от 0 до 59");
      if (min >= 0 && min <= 14) {
        console.log ("Первая");
     }
      if (min >= 15 && min <= 30) {
        console.log ("Вторая");
     }
     if (min >= 31 && min <= 45) {
        console.log ("Третья");
     }
     if (min >= 46 && min <= 59) {
        console.log ("Четвертая");
     }
        </script>
  ?>
        Ответ:<?=$result ?>  
  </div>


    <dif class="Zadanie">
          <h2>Задание 8</h2>
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
      Ответ:<?=$result ?>  
  </div>


  <dif class="Zadanie">
          <h2>Задание 9</h2>
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
      Ответ:<?=$result ?>  
  </div>


  <dif class="Zadanie">
          <h2>Задание 10</h2>
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
      Ответ:<?=$result ?>  
  </div>


        <dif class="Zadanie">
          <h2>Задание 11</h2>
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
      Ответ:<?=$result ?>  
  </div>

         <dif class="Zadanie">
          <h2>Задание 12</h2>
Выведите столбец чисел от 1 до 100.
</div>
     <div class="Otvet"> 
     <?php
   для ($i = 1; $i <= 100; $i++) {
		echo $i . "<br>";
	}
     ?>
     Ответ:<?=$result ?>  
 </div>

 



