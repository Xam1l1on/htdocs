<!DOCTYPE html>
<html lang="en">
<?php 
    $title = "Посетители фестиваля";
    $link = 'rel="stylesheet" type="text/css" href="../CSS/UsersList.css"';
    $CSS_header = 'rel="stylesheet" type="text/css" href="../CSS/header.css"';
    include_once("../Components/head.php");
    include_once("../Components/header.php");
?>
<body>
    <?php 
        include_once("../Components/bd_config.php");
        include_once("../Components/UsersList_config.php");
    ?>
    <table>
        <caption>Зарегистрированные пользователи</caption>
        <tr>
            <th>Имя</th>
            <th>Отчество</th>
            <th>Фамилия</th>
            <th>Дата рождения</th>
            <th>Почта</th>
            <th>Телефон</th>
            <th>Предмет</th>
            <th>Роль</th>
        </tr>
        <?php
            for($i=1; $i <= $row_count; $i++) : 
                $row_arr = mysqli_fetch_array($result);
            ?>
                <tr>
                    <td><?php echo $row_arr['Name'];?></td>
                    <td><?php echo $row_arr['MiddleName'];?></td>
                    <td><?php echo $row_arr['LastName'];?></td>
                    <td><?php echo $row_arr['BirhDate'];?></td>
                    <td><?php echo $row_arr['Email'];?></td>
                    <td><?php echo $row_arr['Phone'];?></td>
                    <td><?php echo $row_arr['Subject'];?></td>
                    <td><?php echo $row_arr['Role'];?></td>
                </tr>
                <?php endfor;?>
    </table>
</body>
<?php
    include_once("../Components/footer.php");
?>
</html>