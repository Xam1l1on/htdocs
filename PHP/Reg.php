<!DOCTYPE html>
<html lang="en">
<?php    
    $title = "Регистрация пользователя";
    $link = 'rel="stylesheet" type="text/css" href="../CSS/Reg.css"';
    $CSS_header = 'rel="stylesheet" type="text/css" href="../CSS/header.css"';
    include_once("../Components/head.php");
    include_once("../Components/header.php");
?>
    <body>
        <div>
            <form name="RegistrationForm" class="decor" action="SucReg.php", metod="POST">
                <div class="form_inner">
                   <input  id="name" name="name" type="text" placeholder="Имя" pattern="[А-Яа-яЁё]+" required>
                   <input  id="middlename" name="middlename" type="text" placeholder="Отчество" pattern="[А-Яа-яЁё]+" required>
                   <input  id="lastname" name="lastname" type="text" placeholder="Фамилия" pattern="[А-Яа-яЁё]+" required>
                   <input  id="birthday" name="birthday" type="date" placeholder="12.12.1990">
                   <input  id="mail" name="mail" type="email" placeholder="Email" required>
                   <input  id="phone" name="phone" type="tel" name="phone" placeholder="+7-999-888-77-66" pattern="+7-[0-9]{3}-[0-9]{3}-[0-9]{2}-[0-9]{2}" required>
                   <select name="subjects" size="1" required>
                       <option value="Математика">Математика</option>
                       <option value="Физика">Физика</option>
                       <option value="Информатика">Информатика</option>
                   </select>
                   <div class="group_radio">
                    <div class="inp_radio inp_radio_1">
                        <input  id="lector" type="radio" name="doklad" value="Докладчик"/>
                        <label for="lector">Докладчик</label>
                       </div>
                       <div class="inp_radio inp_radio_2">
                        <input  id="listener" type="radio" name="doklad" value="Слушатель" checked/>
                        <label for="listener">Слушатель</label>
                       </div> 
                   </div>
                   </form>            
                   <input type="submit" name="is_signup" formmethod = "post" value="Отправить">
                </div>
                <?php
                include_once("../Components/bd_config.php");
                ?>
             </form>
        </div>
    </body>
    <footer>
    </footer>
</html>
<!-- <Location "C:\xampp\htdocs\PHP\SucReg.php">
    DirectorySlash Off
    SetHandler some-handler
</Location> -->
<!-- action="./PHP/UserConference.php" pattern="[А-Яа-яЁё]+"  formaction="/PHP/SucReg.php" form="RegistrationForm"->
</html>
