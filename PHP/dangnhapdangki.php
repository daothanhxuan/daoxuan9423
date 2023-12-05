<!DOCTYPE html>
<html lang="vi">
    <head>
        <meta charset="utf-8">
        <title>ĐĂNG KÍ</title>
    </head>   
    <body>
        <?php
             $severname ="lasthope";
             $username ="root";
             $password ="";
             $db ="myDB";
             $conn =new mysqli($severname, $username, $password, $db);
             if ($conn->connect_error) {
                die("Connection_failed: " . $conn->connect_error);
             }
             echo "Connected successfully <br>";
        ?>
