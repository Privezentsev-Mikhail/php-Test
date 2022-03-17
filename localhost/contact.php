<?php
session_start();
$title = "Контакты";
require "bloks/header.php";
?>

  <h1>Контакты</h1>

<div class="text-success"><?=$_SESSION["success_mail"]?></div>

  <form  action="check_contact.php" method="post">
        <input type="text" name="user_name" value="<?=$_SESSION["user_name"]?>" placeholder="Введите имя" class="form-control">
        <div class="text-danger"><?=$_SESSION["error_username"]?></div><br>
        <input type="email" name="email" value="<?=$_SESSION["email"]?>" placeholder="Введите email" class="form-control">
        <div class="text-danger"><?=$_SESSION["error_email"]?></div><br>
        <input type="text" name="subject" value="<?=$_SESSION["subject"]?>" placeholder="Тема сообщения" class="form-control">
        <div class="text-danger"><?=$_SESSION["error_subject"]?></div><br>
        <textarea name="massage" placeholder="Ваше сообщение" class="form-control"><?=$_SESSION["message"]?></textarea>
        <div class="text-danger"><?=$_SESSION["error_message"]?></div><br>
        <button type="submit" class="btn btn-success">Отправить</button><br>

</form>





























<?php
//  echo date("m-l H:i:s", time() + 10000).<br>;
//  echo date("m-d H:i:s", strtotime("-1 Hour +2 Day -4 Week"));
//  echo date("m-d H:i:s", strtotime("next monday"));
/*
  $lis = [5, 6, 3, 9, 2, 11, 4 ];
  unset($lis[1]);
  $lis = array_values($lis);
  rsort($lis);

  $arr = array_slice($lis, 2, 2);
  print_r ($arr);
  echo "<br>";

  $arr_1 = [5, 6];
  $arr_2 = [2, 3, 7];
  $arr_3 = array_merge($arr_1, $arr_2);
  print_r ($arr_3);
  echo "<br>";
//    if( in_array(3, $lis) == "")
//        echo "Not foudn";
//    else
//        echo "Found";

//  shuffle($lis);
  print_r ($lis);
  echo "<br>";

  $x ="10";
  echo gettype($x). "<br>";
  echo is_numeric($x). "<br>";
  echo is_integer($x). "<br>";

  $str = "Example";
  echo strpos($str, "am"). "<br>";

  $words = "john, bob, alex";
  $arr_words = explode(",", $words);
  print_r($arr_words);
  echo "<br>". implode(" | ", $arr_words). "<br>";



#     $file = fopen("text.txt", "a");

#      fwrite($file, "\nExample text\nHello");

#      fclose($file);

    $filename = "text.txt";
    $file = fopen($filename, "r");

    $content = fread($file, filesize($filename));

    fclose($file);

    echo "<pre>".$content."</pre>"."<br>";


    file_put_contents("a.txt", "Example\nHello");
    echo file_get_contents("a.txt")."<br>";

    echo file_exists("a.txt")."<br>";
    //rename("a.txt", "new_a.txt");
  //  unlink("new_a.txt");

  //  echo fileprems(__FILE__);
    chmod(__FILE__, 0777);

*/

require "bloks/footer.php";
?>
