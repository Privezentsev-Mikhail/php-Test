<?php
$title = "О нас";
require "bloks/header.php";
?>

  <h1>Про нас</h1>

  <form action="check_contact.php" method="post">

          <input type="text" name="username" placeholder="Введите имя" class="form-control"><br>
          <input type="text" name="username" placeholder="Введите имя" class="from-control"><br><br>

          <input type="email" name="email" placeholder="Введите email" class="form-control"><br>
          <input type="email" name="email" placeholder="Введите email" class="from-control"><br><br>

          <input type="password" name="password" placeholder="Введите пароль" class="form-control"><br>
          <input type="text" name="subject" placeholder="Тема сообщения" class="from-control"><br><br>

          <textarea name="massage" placeholder="Введите сообщение" class="form-control"></textarea><br>
          <textarea name="massege" placeholder="Ваше сообщение" class="from-control"></textarea><br><br>

          <input type="submit"  value="Отправить" class="btn btn-success"><br>
          <button type="submit" class="btn btn-success">Отправить</button><br><br>

  </form>
  <?php
  require "bloks/footer.php";
  ?>
