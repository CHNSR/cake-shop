<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    /* ... (รูปแบบอื่นๆ) ... */
    .success-message-success {
            background-color: #007bff;
            color: #ffffff;
            text-align: center;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 15px auto;
            width: fit-content;
        }
 
        /* ... (รูปแบบอื่นๆ) ... */
        .success-message-false {
            background-color: red;
            color: #ffffff;
            text-align: center;
            padding: 10px 20px;
            border-radius: 5px;
            margin: 15px auto;
            width: fit-content;
        }
    </style>
</head>
<body>
    

<?php
// เชื่อมต่อกับฐานข้อมูล
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "webgg";

$conn = new mysqli($servername, $username, $password, $dbname);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

if (isset($_GET['userID'])) {
    $userID = $_GET['userID'];

    // สร้างคำสั่ง SQL สำหรับลบข้อมูล
    $sql = "DELETE FROM login_info WHERE userID = $userID";

    if ($conn->query($sql) === TRUE) {
        echo '<div class="success-message-success">ลบข้อมูลแล้ว</div>';
        echo '<script>
                setTimeout(function() {
                    window.location.href = "data.php";
                }, 5000); // 5 วินาที
            </script>';
    } else {
        echo '<div class="success-message-false">ลบข้อมูลแล้ว</div>';
        echo '<script>
                setTimeout(function() {
                    window.location.href = "data.php";
                }, 5000); // 5 วินาที
            </script>';
    }
    
}

// ปิดการเชื่อมต่อ
$conn->close();
?>
<br>
    <center>
    <a href="edit.php" style="background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">กลับไปยังหน้า Admin</a>
    
    </center>
</body>
</html>