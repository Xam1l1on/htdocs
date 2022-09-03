<!DOCTYPE html>
<html lang="en">
<?php
$title = "Успешная регистрация";
$link = 'rel="stylesheet" type="text/css" href="../CSS/SucReg.css"';
$CSS_header = 'rel="stylesheet" type="text/css" href="../CSS/header.css"';
include_once("../Components/head.php");
include_once("../Components/header.php");
?>
<body>
  <?php
      include_once("../Components/bd_config.php");
      $name = $_POST['name'];
      $middlename = $_POST['middlename'];
      $lastname = $_POST['lastname'];
      $birthday = $_POST['birthday'];
      $mail = $_POST['mail'];
      $phone = $_POST['phone'];
      $subjects = htmlspecialchars ($_POST['subjects']);
      $doklad = $_POST['doklad'];
      include_once("../Components/Regform_config.php");
  ?>
</div>
  <div class="info">
    <ul class="list">
      <li><label for="name">Имя </label><?php echo $name;?></li>
      <li><label for="middlename">Отчество </label><?php echo $middlename;?></li>
      <li><label for="lastname">Фамилия </label><?php echo $lastname;?></li>
      <li><label for="birthday">Дата рождения </label><?php echo $birthday;?></li>
      <li><label for="mail">Ваша почта </label><?php echo $mail;?></li>
      <li><label for="phone">Ваш телефон </label><?php echo $phone;?></li>
      <li><label for="subjects">Предмет </label><?php echo $subjects;?></li>
      <li><label for="doklad">Вы </label><?php echo $doklad;?></li>
    </ul>
  </div>
</body>
</html>
<?php
