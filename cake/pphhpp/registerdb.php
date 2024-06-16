<?php
include("server.php");
session_start();

$errors = array();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = mysqli_real_escape_string($conn,$_POST["username"]);
    $email = mysqli_real_escape_string($conn,$_POST["email"]);
    $password = mysqli_real_escape_string($conn,$_POST["password"]);
    $confpassword = mysqli_real_escape_string($conn, $_POST['confpassword']);
    $tell = mysqli_real_escape_string($conn, $_POST['tell']);
    $address = mysqli_real_escape_string($conn, $_POST['address']);

    //ไม่จำเป็นต้องตรวจ ช่องว่างเพราะ register.html ตรวจให้แล้ว
    //ตรวจว่า email หรือ username ซ้ำไหม
    $user_check_query = "SELECT * FROM login_info WHERE username = '$username' OR email = '$email'";
    $query = mysqli_query($conn, $user_check_query);
    $result = mysqli_fetch_assoc($query);

    if ($result) {
        if ($result['username'] === $username) {
            array_push($errors, "Username นี้ถูกใช้ไปแล้ว");
        }
        if ($result['email'] === $email) {
            array_push($errors, "Email ถูกใช้ไปแล้ว");
        }
    }
    
    // เพิ่มข้อมูลลงในฐานข้อมูล (ในตัวอย่างนี้เราจะใช้ตาราง users) use แทน tell 
    if (count($errors) == 0) {
        
        $sql = "INSERT INTO login_info (username, email, password, address, name) VALUES ('$username', '$email', '$password', '$address', 'tell')";

        if ($conn->query($sql) === TRUE) {
            echo "ลงทะเบียนเรียบร้อยแล้ว";
            header('location:/phpdb/cake-shop-website-template/index.php');
            $conn->close();
            exit;
        } else {
            echo "เกิดข้อผิดพลาดในการลงทะเบียน: " . $conn->error;
            header('location:../cake-shop-website-template/pphhpp/registerdb.php');
            $conn->close();
            exit;
        }
    }
    
}
?>