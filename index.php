<!DOCTYPE html>
<html lang="en">
<?php    
    $title = "Конференция";
    $link = 'rel="stylesheet" type="text/css" href="/CSS/index.css"';
    $CSS_header = 'rel="stylesheet" type="text/css" href="/CSS/header.css"';
    $CSS_footer = 'rel="stylesheet" type="text/css" href="/CSS/footer.css"';
    include_once("Components/head.php");
    include_once("Components/header.php");
?>
<body>
    <main class="index_main">
    <div class="block left_block" >
        <h3>
            Приглашаем Вас на увлекательную встречу. 
        </h3>
        <div class ="text">
            Если для Вас <q>2 + 2 != 5</q> не околесица, а полезная фича.<br>
            Вы должны посетить нашу конференцию.
            <hr>
            <em>Зарегистрируйся на сайте и получишь приз</em><br>
            Переходи по ссылке &rArr; <a class="link_left" href="PHP/Reg.php"><q>оставить след в истории</q></a>
        </div>
    </div>
    <div class = "block right_block">
        <a name="Registration" href="PHP/Reg.php"> Вы хотите зарегистрироваться</a>
        <a href="PHP/UsersList.php">Посмотреть список участников</a>
    </div>
    </main>
</body>
<?php
    include_once("Components/footer.php")
?>
</html>
