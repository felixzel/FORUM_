<?php
    require 'inc/databas.php';
?>
<!DOCTYPE html>
<html lang="sv" class="loginpage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="loginpage">
    <header>
        <div class="nav-top">
            <a class="navforum" href="index.php">FORUM_</a>
            <a class="navregister" href="register.php">Register</a>
            <a class="navsignin" href="login.php">Sign in</a>
        </div>
    </header>
    <main>
        <div class="loginmain">
            <img class="loginpic" src="SVG/login_page.svg" alt="">
            <img class="loginline" src="SVG/middle_login.svg" alt="">
            <h4 class="h4login">Login</h4>
            <p class="plogin">Enter your details below</p>
        </div>
        <div class="logindetails">
            <form action="inc/logindb.php" method="post">
                <div class="login_password_adress_phone_box">
                    <img src="SVG/mailicon.svg" alt="" class="mailicon">
                    <input type="text" placeholder="E-mail Adress" class="login_box" name="email" required>
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/lockicon.svg" alt="" class="lockicon">
                    <input type="password" placeholder="Password" class="password_box" name="pass" required>
                </div>
                <div class="forgotpass_box">
                    <a href="#" class="forgotpass">Forgot Password ></a>
                </div>
                <div class="loginbtn_box">
                    <input type="submit" value="Login" class="loginbtn" name="login_submit">
                </div>
            </form>
        </div>
    </main>
    <footer>
        <div class="landingbottom">
            <img class="gfxl" src="SVG/gfxl.svg" alt="">
            <img class="gfxr" src="SVG/gfxr.svg" alt="">
        </div>
    </footer>
</body>
</html>