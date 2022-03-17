<?php
    session_start();

    unset($_SESSION["user_name"]);
    unset($_SESSION["email"]);
    unset($_SESSION["subject"]);
    unset($_SESSION["message"]);

    unset($_SESSION["error_username"]);
    unset($_SESSION["error_email"]);
    unset($_SESSION["error_subject"]);
    unset(  $_SESSION["error_message"]);

    function redirect(){
      header("Location: contact.php");
      exit;

    }

    $user_name = htmlspecialchars(trim($_POST["user_name"]));
    $from = htmlspecialchars(trim($_POST["email"]));
    $subject = htmlspecialchars(trim($_POST["subject"]));
    $message = htmlspecialchars(trim($_POST["message"]));

          $_SESSION["user_name"] = $user_name;
          $_SESSION["email"] = $from;
          $_SESSION["subject"] = $subject;
          $_SESSION["message"] = $message;

if (strlen($user_name) <= 1){
        $_SESSION["error_username"] = "Введите коректное имя";
        redirect();
      }
else if (strlen($from) < 5 || strpos($from, "@") == false){
        $_SESSION["error_email"] = "Вы ввели некорректный email";
        redirect();
      }
else if (strlen($subjekt) <= 5){
        $_SESSION["error_subject"] = "Тема сообщения не менее 5 символов";
        redirect();
      }
else if (strlen($message) < 15){
        $_SESSION["error_message"] = "Cообщения не менее 15 символов";
        redirect();
      }
      else {
        $subjekt = "=?utf-8?B?".base64_encode($subject)."?=";
        $headers = "From: $from\r\nReply-to: $from\r\nContent-type:text/plain; charset=utf-8\r\n";
        mail("admin@mail.com", $subject, $message, $headers);
        $_SESSION["success_mail"] = "Письмо отправлено";
        redirect();
      }
