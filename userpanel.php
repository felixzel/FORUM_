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
<?php
if (isset($_SESSION['uRole']) && $_SESSION['uRole'] == "Admin"){
    echo '<main>
        <div class="landingmain_userpanel">
            <img class="loginpic" src="SVG/userpanel_page.svg" alt="">
            <p>Admin</p>
        </div>
    </main>';
}
if (isset($_SESSION['uRole']) && $_SESSION['uRole'] == "User"){
    echo'<main>
        <div class="landingmain_userpanel">
            <img class="loginpic" src="SVG/userpanel_page.svg" alt="">
            <p>User</p>
            <h4 class="h4login">Change credentials</h4>
            <p class="plogin">Enter your details below</p>
        </div>
        <div class="replacedetails">
            <form action="inc/edit_userdb.php" method="post">
                <div class="Fn_box">
                    <img src="SVG/usericon.svg" alt="" class="usericon">
                    <input type="text" placeholder="First Name" class="Fn_box1" name="user_first_name" value="'.$_SESSION['uFname'].'" required>
                </div>
                <div class="Ln_box">
                    <img src="SVG/usericon.svg" alt="" class="usericon1">
                    <input type="text" placeholder="Last Name" class="Ln_box1" name="user_last_name" value="'.$_SESSION['uLname'].'">
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/mailicon.svg" alt="" class="mailicon">
                    <input type="text" placeholder="E-mail Adress" class="login_box" name="email" value="'.$_SESSION['uLmail'].'" required>
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/lockicon.svg" alt="" class="lockicon">
                    <input type="password" placeholder="Password" class="password_box" name="pass" required>
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/adressicon.svg" alt="" class="adressicon">
                    <input type="text" placeholder="Adress" class="adress_box" name="adress" value="'.$_SESSION['uAdress'].'" required>
                </div>
                <div class="login_password_adress_phone_box">
                    <img src="SVG/phoneicon.svg" alt="" class="phoneicon">
                    <input type="text" placeholder="Phone Number" class="phone_box" name="phone_number" value="'.$_SESSION['uPhone'].'" required>
                </div>
                <div class="registerbtn_box">
                    <input type="submit" value="Update" class="registerbtn" name="update_submit">
                </div>
            </form>
        </div>
    </main>';
}
?>
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