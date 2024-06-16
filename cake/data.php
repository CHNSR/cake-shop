<!DOCTYPE html>
<html>
<head>
    <title>Show Data</title>
</head>
<body>
    <center><h1>Data from Database</h1></center>
    
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

    // คำสั่ง SQL สำหรับดึงข้อมูล
    $sql = "SELECT * FROM login_info";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1' style='margin: 0 auto;'>";
        echo "<tr style='background-color: orange;'><th>UsrID</th><th>Username</th><th>Tell</th><th>Email</th><th>Address</th><th>Edit</th><th>Delete</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row['userID'] . "</td><td>" . $row['username'] . "</td><td>" . $row['tell']. "</td><td>" . $row['email']. "</td><td>" . $row['address'] . "</td><td>" . '<a href = "update_data.php">Edit</a>' . "</td><td>" . '<a href="delete_user.php?userID=' . $row['userID'] . '">Delete</a>' . "</td></tr>";
        }

        echo "</table>";
    } else {
        echo "ไม่พบข้อมูลในฐานข้อมูล.";
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
