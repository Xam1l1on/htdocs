<header>
    <h1 class="header_title">Конференция</h1>
    <?php
        if(basename($_SERVER['SCRIPT_FILENAME']) == 'index.php') :
    ?>
        <nav class="header_menu">
        <ul class = "header_list_menu">
            <li class="header_menu_1">
                <a href="index.php">Главная</a> 
        </li>
            <li class="header_menu_2">
                <a href="PHP/Reg.php">Регистрация</a>
        </li>
            <li class="header_menu_3">
                <a href="PHP/UsersList.php">Список участников</a>
        </li>
        </ul>
    </nav>
    <?php
        else :
    ?>
        <nav class="header_menu">
            <ul class = "header_list_menu">
                <li class="header_menu_1">
                    <a href="../index.php">Главная</a>
                </li>
                <li class="header_menu_2">
                        <a href="Reg.php">Регистрация</a>
                </li>
                <li class="header_menu_3">
                    <a href="UsersList.php">Список участников</a>
                </li>
            </ul>
        </nav>
    <?php
        endif ;
    ?>
        <link <?=$CSS_header?>></link>
</header>