<?php
// เชื่อมต่อกับฐานข้อมูล MySQL
$servername = "localhost";
$username = "root";
$password = "";
$database = "webgg";

$conn = new mysqli($servername, $username, $password, $database);

// ตรวจสอบการเชื่อมต่อ
if ($conn->connect_error) {
    die("การเชื่อมต่อล้มเหลว: " . $conn->connect_error);
}

// ดึงข้อมูลจากแบบฟอร์ม
$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

// สร้างคำสั่ง SQL เพื่อแทรกข้อมูล
$sql = "INSERT INTO contrac_us (name, email, subject, message) VALUES ('$name', '$email', '$subject', '$message')";
echo "<center>";
// ส่งคำสั่ง SQL ไปยังฐานข้อมูล
if ($conn->query($sql) === TRUE) {

    echo "<h3>ข้อมูลถูกบันทึกเรียบร้อย</h3>";
    echo "<h4>อีก 5 วินาที ระบบจะพาคุณกลับไป</h4>";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'contact.php';
            }, 5000); // รอ 5 วินาที
          </script>";
} else {
    echo "<h3>เกิดข้อผิดพลาดในการบันทึกข้อมูล</h3>: " . $conn->error;
    echo "<h4>อีก 5 วินาที ระบบจะพาคุณกลับไป</h4>";
    echo "<script>
            setTimeout(function() {
                window.location.href = 'contact.php';
            }, 5000); // รอ 5 วินาที
          </script>";
}
echo "</center>";
// ปิดการเชื่อมต่อกับฐานข้อมูล
$conn->close();
?>
