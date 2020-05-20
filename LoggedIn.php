<?php
    session_start();

    echo '<p class="sessionname">User: '.$_SESSION['uFname'].'</p>';
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
        <div class="nav-top-loggedin">
            <a class="navforum" href="LoggedIn.php">FORUM_</a>
            <a class="newpostnav" href="#">New Post</a>
            <a class="usericon-loggedin" href="userpanel.php"><img src="SVG/usericon.svg"></a>
            <a class="logouticon" href="inc/logoutdb.php"><img src="SVG/logouticon.svg" alt=""></a>
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