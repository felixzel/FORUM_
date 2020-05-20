<?php
    require 'inc/databas.php';
?>
<!DOCTYPE html>
<html lang="sv" class="registerpage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="registerpage">
    <header>
        <div class="nav-top">
            <a class="navforum" href="index.php">FORUM_</a>
            <a class="navregister" href="#">Register</a>
            <a class="navsignin" href="login.php">Sign in</a>
        </div>
    </header>
    <main>
        <div class="registermain">
            <img class="registerpic" src="SVG/register_page.svg" alt="">
            <img class="loginline" src="SVG/middle_login.svg" alt="">
            <h4 class="h4login">Register</h4>
            <p class="plogin">Enter your details below</p>
        </div>
        <div class="registerdetails">
            <form action="inc/registerdb.php" method="post">
                <div class="Fn_box">
                    <img src="SVG/usericon.svg" alt="" class="usericon">
                    <input type="text" placeholder="First Name" class="Fn_box1" name="first_name" required>
                </div>
                <div class="Ln_box">
                    <img src="SVG/usericon.svg" alt="" class="usericon1">
                    <input type="text" placeholder="Last Name" class="Ln_box1" name="last_name">
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/mailicon.svg" alt="" class="mailicon">
                    <input type="text" placeholder="E-mail Adress" class="login_box" name="email" required>
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/lockicon.svg" alt="" class="lockicon">
                    <input type="password" placeholder="Password" class="password_box" name="pass" required>
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/adressicon.svg" alt="" class="adressicon">
                    <input type="text" placeholder="Adress" class="adress_box" name="adress" required>
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/phoneicon.svg" alt="" class="phoneicon">
                    <input type="text" placeholder="Phone Number" class="phone_box" name="phone_number" required>
                </div>
                <div class="registerbtn_box">
                    <input type="submit" value="Register" class="registerbtn" name="register_submit">
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