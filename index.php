<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="sv" class="landingpage">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forum_</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
</head>
<body class="landingpage">
    <header>
        <div class="nav-top">
            <a class="navforum" href="index.php">FORUM_</a>
            <a class="navregister" href="register.php">Register</a>
            <a class="navsignin" href="login.php">Sign in</a>
        </div>
    </header>
    <main>
        <div class="landingmain">
            <img class="landingpic" src="SVG/landing_page.svg" alt="">
            <p class="landingquote1">"Alone we can do so little; together we can do so much."</p>
            <p class="landingquote12">- Helen Keller</p>
            <p class="landingquote2">"Either write something worth reading or do something </br>worth reading."</p>
            <p class="landingquote22">- Benjamin Franklin</p>
            <p class="landingquote3">"Be the change you wish to see in the world."</p>
            <p class="landingquote32">- Mahatma Gandhi</p>
            <button class="landingbutton" type="submit" href="#">Register</button>
        </div>
    </main>
    <footer>
        <div class="landingbottom">
            <img class="gfxl" src="SVG/gfxl.svg" alt="">
            <img class="gfxr" src="SVG/gfxr.svg" alt="">
        </div>
    </footer>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js" ></script>
    <script>
    $(".landingbutton").click(function() {
    window.location.href = "./register.php";})
    </script>
</body>
</html>