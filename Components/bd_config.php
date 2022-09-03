<?php
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $db_name = "PTI2022";
    $conn = new mysqli($servername, $username, $password, $db_name);
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
      }
      error_log("Connected successfully", 0);
    // define('DB_SERVER', 'localhost');
    // define('DB_USERNAME', 'root');
    // define('DB_USERPSW', '123qwe');
    // define('DB_NAME', 'PTI2022');
    // $mysqli = new mysqli__construct(DB_SERVER,DB_USERNAME,DB_USERPSW,DB_NAME);
    // if($mysqli == false) die("Error connection to PTI2022" . mysqli_connect_error())
?>