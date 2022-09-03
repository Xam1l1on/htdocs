<?php
        $sql = "INSERT INTO users(Name, MiddleName, LastName, BirhDate, Email, Phone, Subject, Role) 
         VALUES('$name','$middlename','$lastname','$birthday','$mail','$phone','$subjects','$doklad');";
        // $conn->query($sql);
        if ($conn->query($sql) === TRUE) {
          error_log("Успешно создана новая запись", 0);
       } else {
          error_log("Ошибка: " . $sql . "<br>" . $conn->error, 0);
       }

      // $sql = "INSERT INTO testusers(Name,MiddleName,LastName,BirhDate) 
      // VALUES ('$name','$middlename','$lastname','$birthday','',);";
      // if ($conn->query($sql) === TRUE) {
      //        echo "Успешно создана новая запись";
      //     } else {
      //        echo "Ошибка: " . $sql . "<br>" . $conn->error;
      //     }
      // -- // $result = $mysqli->query($sql);
      // -- // };
      // -- // if(isset($_POST['is_signup'])){
      // -- //   $sql = "INSERT INTO users(Name,MiddleName,LastName,BirhDate,Email,Phone,Subject,Role) 
      // -- // VALUES (\'[$name]\',\'[$middlename]\',\'[$lastname]\',\'[$birthday]\',\'[$mail]\',\'[$phone]\',\'[$subjects]\',\'[$doklad]\');";
      // -- // }
      // -- // else {
      // -- //   if ($conn->query($sql) === TRUE) {
      // -- //     echo "New record created successfully";
      // -- //   } else {
      // -- //     echo "Error: " . $sql . "<br>" . $conn->error;
      // -- //   }
      // -- // }
?>