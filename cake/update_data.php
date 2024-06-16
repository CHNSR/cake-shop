<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <style>
        /* เพิ่ม CSS เพื่อสร้างเอฟเฟกต์การตกแต่ง */
        body {
            background-color: #f2f2f2;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #ffffff;
            border: 1px solid #dddddd;
            border-radius: 5px;
            box-shadow: 2px 2px 5px #aaaaaa;
        }

        div {
            margin-bottom: 10px;
        }

        input[type="text"] {
            width: 100%;
            padding: 5px;
            border: 1px solid #dddddd;
            border-radius: 3px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: #ffffff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }

        /* สไตล์สำหรับการแสดงข้อความอัพเดต */
        .update-message-success {
            background-color: Green;
            color: White;
            text-align: center;
            padding: 5px 20px;
            border-radius: 5px;
            margin: 15px 0; /* ปรับความสูงของแถบพื้นหลัง */
        }
        .update-message-false {
            background-color: red;
            color: White;
            text-align: center;
            padding: 5px 20px;
            border-radius: 5px;
            margin: 15px 0; /* ปรับความสูงของแถบพื้นหลัง */
        }
        input[type="reset"] {
            background-color: red;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <center>
        <h1>Update_Data_user</h1>
        <form action="" method="post">
            <div>
                Username
                <input type="text" name="username" require>
            </div>
            <div>
                Tell
                <input type="text" name="Tell" require>
            </div>
            <div>
                Address
                <input type="text" name="Address"require>
            </div>
            <div>
                <input type="submit" value="Update Data" name="update">
                <input type="reset" value="Reset">
            </div>
        </form>

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

        if (isset($_POST['update'])) {
            // รับข้อมูลจากฟอร์ม
            $username = $_POST['username'];
            $new_address = $_POST['Address'];
            $new_tell = $_POST['Tell'];
        
            // สร้างคำสั่ง SQL สำหรับการปรับปรุงข้อมูล
            $sql = "UPDATE login_info SET address='$new_address', tell='$new_tell' WHERE username='$username'";
        
            // ทำการอัพเดตข้อมูลและตรวจสอบจำนวนแถวที่ถูกอัพเดต
            $conn->query($sql);
            if ($conn->affected_rows > 0) {
                echo '<div class="update-message-success">อัพเดตข้อมูลเรียบร้อย</div>';
                // เรียกใช้ JavaScript เพื่อซ่อนข้อความนี้ใน 5 วินาที
                echo '<script>
                        setTimeout(function() {
                            var updateMessage = document.querySelector(".update-message-success");
                            updateMessage.style.display = "none";
                        }, 5000); // 5 วินาที
                      </script>';
            } else {
                echo '<div class="update-message-false">ไม่พบ username</div>';
                echo '<script>
                        setTimeout(function() {
                            var updateMessage = document.querySelector(".update-message-false");
                            updateMessage.style.display = "none";
                        }, 5000); // 5 วินาที
                      </script>';
            }
        }
        

        // ปิดการเชื่อมต่อ
        $conn->close();
        ?><br>
        <a href="data.php" style="background-color: orange; color: white; padding: 10px 20px; border-radius: 5px; text-decoration: none;">กลับไปยังหน้า See user</a>
    </center>
</body>
</html>
