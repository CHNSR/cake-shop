
<?php {
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (isset($_SESSION['username'])) {
    $user_name = $_SESSION['username'];
} else {
    $user_name = 'None';  // กำหนดให้เป็นค่าว่าง
    
}
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Login Page</title>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form in HTML and CSS |Codehal</title>
        <link rel="stylesheet" href="css\styleLR.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
</head>
<body>
    
    <div class="wrapper">
    <form action="logindb2.php" method="post">
        <h2>Login</h2>
        <div class="input-box" >
        <input  type="text" name="username" id="username" placeholder="Username" required> 
        </div>
        <div class="input-box" >
        <input  type="password" name="password" id="password" placeholder="Password" required>
        </div>
        <input class="btn" type="submit" value="Login">
        <div class="register-link"> <p>Don't have an account?
                        <a href="Register.php">Register</a></p>
                </div>
    </form>
    </div>
</body>
</html>