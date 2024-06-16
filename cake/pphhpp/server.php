<?php

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "webgg";
    
    //Creat Connection
    $conn = mysqli_connect($servername, $username, $password, $dbname);

    //Cheack connection
    if(!$conn) {
        die("การเชื่อมต่อฐานข้อมูลล้มเหลว  *-* " . mysqli_connect_error());
    } 



?>