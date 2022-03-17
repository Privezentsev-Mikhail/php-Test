<?php

    $title = "Главная";
    require "bloks/header.php";
?>

<h1>Главная страница</h1>


<?php
//    phpinfo();

//    echo "<pre>";
//    print_r($_SERVER);
//    echo "</pre>";

      //Работа с переносом URL адреса

  /*  echo $_SERVER["HTTPS"]."<br>";
    echo $_SERVER["HTTP_HOST"]. " - ". $_SERVER["REQUEST_URI"]."<br>";
    echo $_SERVER["HTTP_USER_AGENT"]."<br>";

    if($_GET["source"] !=""){
        $link = explode("?source=", $_SERVER["REQUEST_URI"]);
        $redirect = "http://".$_SERVER["HTTP_HOST"].$link[0];

        header("HTTP/1.1 301 Moved Permanently");
        header("location: ".$redirect);
        exit();
    }

*/

/*                        Отправка Email
$message = "Сообщение";
$to = "fenix@mail.ru";
$from = "examle@mail.ru";
$subject = "Тема сообщения";

$subjekt = "=?utf-8?B?".base64_encode($subject)."?=";
$headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";

mail($to, $subject, $message, $headers);

*/

                                  //Cессии и Куки
//$user_name = "Alex";
//setcookie("user_name", $user_name, time() + 180);
//print_r($_COOKIE);
//setcookie("user_name", $user_name, time() - 180);
//echo $_COOKIE["user_name"];

//session_destroy();
//$_SESSION["user_name"] = $user_name;

//if($_SESSION["user_name"] == "Alex")
//      echo "Да, сессия установлена!";
















    require "bloks/footer.php";
?>
