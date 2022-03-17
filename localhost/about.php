<?php
$title = "О нас";
require "bloks/header.php";
?>

  <h1>Про нас</h1>

  <form action="check_get.php" method="get">
          <input type="text" name="username" placeholder="Введите имя" class="form-control">
          <input type="email" name="email" placeholder="Введите email" class="form-control">
          <input type="password" name="password" placeholder="Введите пароль" class="form-control">
          <textarea name="massage" placeholder="Введите сообщение" class="form-control"></textarea>
          <input type="submit"  value="Отправить" class="btn btn-success">
  </form>



























<?php
require "bloks/footer.php";
?>
