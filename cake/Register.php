<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login Form in HTML and CSS |Codehal</title>
        <link rel="stylesheet" href="css\styleLR.css">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    </head>
    
    <body>
        
        <div class="wrapper">
            <form action="../cake-shop-website-template/pphhpp/registerdb.php" method="post">
                <h1>Register</h1>
                <div class="input-box"> 
                    
                    <input type="text" name="username" placeholder="Username">
                    
                </div>
                
                
                <div class= "input-box">
                    <input type="password" name="password" placeholder="Password" required>
                   
                </div>
                
                <div class= "input-box">
                    <input type="password" name="confpassword" placeholder="Confilm Password" required>
                   
                </div>

                <div class= "input-box">
                    <input type="email" name="email" placeholder="Email" required>
                    
                </div>

                <div class= "input-box">
                    <input type="text" name="tell" placeholder="Tell" required>
                   
                </div>

                <div class= "input-box">
                    <input type="text" name="address" placeholder="Address" required>
                   
                </div>

                <button type="submit" class="btn">Register</button> 
                <div class="register-link">     
                    <p>Already have an account? <a href="index.php">Login</a></p>
                </div>

            </form>
        </div>
    </body>
</html>
