<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>
</head>
<body>
    <h1>Edit Data</h1>
    <form action="" method="post">
        <label for="oderid">Email:</label>
        <input type="text" name="emailtxt" id="emailtxt" required><br>
        
        <button type="submit" value="search" name="search">Search</button>&nbsp;&nbsp;<button type="reset" value="Reset">Reset</button>
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $database = "webgg";

        // ทำการเชื่อมต่อ
        $conn = new mysqli($servername, $username, $password, $database);

        // ตรวจสอบการเชื่อมต่อ
        if ($conn->connect_error) {
            die("เชื่อมต่อกับฐานข้อมูลล้มเหลว: " . $conn->connect_error);
        }


        if (isset($_POST['search'])) {
            $search_term = $_POST["emailtxt"]; // ค่าที่คุณต้องการค้นหา
        
            // คำสั่ง SQL ในการค้นหาข้อมูล
            $sql = "SELECT order_detail.OrderID ,order_detail.bd, order_detail.nbd, order_detail.wd, order_detail.nwd, order_detail.cs, order_detail.ncs, login_info.email
            FROM order_detail
            INNER JOIN login_info ON login_info.email = order_detail.email
            WHERE login_info.email LIKE '%$search_term%' OR order_detail.OrderID LIKE '%$search_term%'";


            $result = $conn->query($sql);
        
            if ($result->num_rows > 0) {
                // แสดงผลลัพธ์ของการค้นหา
                echo "<center>";

                echo "<table border='1'>";
                echo "<tr><th>Email</th><th>Birthday-cake</th><th>Quantity</th><th>Wedding-cake</th><th>Quantity</th><th>Custom-cake</th><th>Quantity</th></tr>";

                while ($row = $result->fetch_assoc()) {
                    echo "<tr><td>" . $row['email'] . "</td><td>" . $row['OrderID'] . "</td><td>" . $row['bd'] . "</td><td>" . $row['nbd'] . "</td><td>" . $row['wd'] . "</td><td>" . $row['nwd'] . "</td><td>" . $row['cs'] . "</td><td>" . $row['ncs'] . "</td></tr>";
                }

                echo "</table>";
                echo "</center>";
            } else {
                echo "ไม่พบข้อมูลในฐานข้อมูล.";
            }
        
            
        }
        
        $conn->close();
        ?>
    </form>
</body>
</html>