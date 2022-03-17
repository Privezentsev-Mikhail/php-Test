<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta http-equiv="content-type" content="text/html">
    <meta charset="utf-8">
    <meta name="keywords" content="test, site, webbsite">
    <meta name="description" content="Этот пробный сайт">
    <link rel="stylesheet" href="css/slyle.css" type="text/css">
    <!-- <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">   -->
    <title>Тестовый сайт</title>
  </head>
  <body>

<?php
require "index11.php";

  define(MY_AGE, 24);
  echo MY_AGE . "<br>";

  $number = 5;  //int
  $numb = -0.55; //float

  $str = "Переменая";  //string
  $bool = true; //boolean

  $a = 0.5;
  $b = "0.5";

  echo $a + floatval($b) . "<br>";


  echo $str . ': ' . $number . $numb;

?>
  <br>
  <br>
  <br>

<?php
  $x = 10;
  $y = 20;

  $x += 10;
  $x -= 10;

  $x = $x / $y;
  echo $x .  "<br>";

  $x %= 100;
  echo $x .  "<br>";


  $x++; //$x +=1;

  echo M_PI."<br>";
  echo M_E."<br>";

  echo abs(-33) . "<br>";
  echo ceil(3.2). "<br>";
  echo floor(3.7). "<br>";
  echo round(3.556785, 2). "<br>";

  echo mt_rand(1, 20). "<br>";

    $rand = mt_rand(1, 2);
    $rand ++;
    echo $rand;

    echo min (2,3,4,6,7,23). "<br>";
 ?>
 <br>
 <br>
 <br>

 <?php

    $str = "Hello";
    echo "Var: $str" . "<br>";
    echo 'Var: $str' . "<br>";

    echo "<input type= \"text\">" . "<br>";

    $length = strlen($str) . '<br>';

    //echo trim("   some   ");

    echo mb_strtoupper (trim("   some   ")) . "<br>";
    echo $length; //5 букв в переменой $str


    echo md5("qwety") . "<br>";
  ?>
  <br>
  <br>
  <br>

<?php
        $x = "Hello!!&";

        $length = strlen($x);

        if ($length >= 8) {
        echo "$x". "<br>";
      }


        $a = 5;

      if($a==5) {
        echo "$a = 5". "<br>";
      }

      if($a!=5) {
        echo "$a = 5" . "<br>";
      }


      $isWeatherGood = false;

      if($a!=5 || $isWeatherGood == false) {    // || - значение или, их может быть множество
            echo "$a = 5" . "Yes" . "<br>";
      }
      else if  ($a == 5) {    //else if может быть сколько угодно
            $x = "YES";
            echo $x . "<br>";
      }
      else {
            echo "Error" . "<br>";
      }

      if($a!=5  && !$isWeatherGood) {    // && - значение и, их может быть множество
            echo "$a = 5" . "Yes" . "<br>";
      }
      else if  ($a == 5) {    //else if может быть сколько угодно
            $x = "YES";
            echo $x . "<br>";
      }
      else {
            echo "Error" . "<br>";
      }
 ?>

 <br>
 <br>
 <br>

<?php


      $x = 6;

      switch ($x) {
        case 5:
          echo "Var : 5";
          break;
        case 7;
          echo "Var : 7";
          break;
        default:
          echo "Default wark!";
          break;
      }
 ?>

  <br>
  <br>
  <br>

<?php
      // Одномерные массивы
    $nums = array(4, 5, 6, 8, -23, 2);
    $nums [0] = 45;
    echo $nums [0] . "<br>";

    $arr = [4, true, 8, 0.4 , "g" , "6" , 1];
    $arr [0] = "f";
    echo $arr[0] . "<br>";

          // Ассоциативные массивы
      $list = ["age" => 25, "name" => "Alex", "hobby" => "football"];
      $list ["name"] = "Bob";
      echo $list["name"] . $list["age"] . "<br>";

              //Многомемрные массисы
          $matrix = [
            [4, 6.5, 7, 2],
            [3, 4],
            [1, 2, 6]
          ];
          $matrix [0][1]= 6.1;
          echo $matrix [0][1];

 ?>
 <br>
 <br>
 <br>

<?php
          // цикл for
    for ($i = 100; $i >= 10; $i -= 5) {
      echo $i. "<br>";
    }
          // цикл while
    $i = 1;
    while ($i <= 10){
      echo $i. "<br>";
      $i++;
    }

          // цикл do while
      $i = 100;
    do {
      echo $i. "<br>";
    } while ($i <= 10);


          // Операторы в циклах

    for ($el=100; $el > 10 ; $el /= 2) {
          if ($el < 15)
            break;      // Выход из цикла при выполнении условия

          if ($el %2 == 0) {
            continue;     //пропуск итерации цикла при выполнении условия
          }

        echo $el. "<br>";
    }


              // Работа с масивами

        $list = [2, 4, 6, 7, 9, "some", 45.4];

        for ($i=0; $i < count($list); $i++) {
              echo "Element $i: $list[$i]". "<br>";
        }



        $list = ["age" => 45, "name" => "Alex", "hobby" => "Football"];

        foreach ($list as $key => $value) {
          echo "Key: $key . Value: $value. <br>";
        }

        $arr = [5,  6, 7, 9];
        foreach ($arr as $value) {
          echo "Value: $value. <br>";
        }

 ?>
  <br>
  <br>
  <br>

  <?php

        function info ($word) {
          echo $word. "<br>";
        }
  //      info(4);
  //      info(1);
  //      info(5.6);


        function math ($x, $y){
    //      $rec = $x + $y;
          return $x + $y ;
        //  echo $rec;
      }
                                            // функция возвращает результат
      $res_1 =  math(4, 6);
      $res_2 =  math(5, 6);


        info($res_1);
        info($res_2);




          function summary ($arr) {
            $summa = 0;
            foreach ($arr as $value) {
                $summa+= $value;
            }

            return $summa;
          }

              $list = [1, 5 , 7, 8, 8];
          echo summary($list). "<br>";
          echo summary([2, 5 , 2, 4, 8]). "<br>";

          if ($list > summary) {
            echo summary($list). "<br>";
          }
          else {
            echo summary([2, 5 , 2, 4, 8]). "<br>";

          }



  //          function info() {
    //          global $x;
      //        $x = 0;
        //    }

    //        $x = 10;
      //      info();
        //    echo $x. "<br>";


            function click(){
              static $count;
              //$count = 0;
              $count++;
              echo $count. "<br>";
            }

              click();
              click();
              click();
              click();

   ?>
<br>
<br>
<br>








  </body>
</html>
