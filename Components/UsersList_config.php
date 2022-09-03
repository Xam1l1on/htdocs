<?php
        $s_query = "SELECT * from users";
        $result = mysqli_query($conn, $s_query);
        $row_count = mysqli_num_rows($result);
        //$row_arr = mysqli_fetch_array($result);
        // $name = $row_arr['Name'];
        // $middlename = $row_arr['MiddleName'];
        // $lastname = $row_arr['LastName'];
        // $birthday = $row_arr['BirhDate'];
        // $mail = $row_arr['Email'];
        // $phone = $row_arr['Phone'];
        // $subjects = $row_arr['Subject'];
        // $doklad = $row_arr['Role'];
        //     if ($conn->query($sql) === TRUE) {
        //     echo "Успешно создана новая запись";
        // } else {
        //     echo "Ошибка: " . $sql . "<br>" . $conn->error;
        // }
?>