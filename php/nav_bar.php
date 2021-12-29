<?php
session_start();
$name = $_SESSION['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css_styles/home_page.css">
    <link rel="stylesheet" href="../css_styles/logged_home.css">

</head>
<body>
<section class="nav_bar" id="nav_bar">
        <div class="logo">
            <img src="../images/logo.png" alt="news.net">
        </div>
        <div class="button">
            <a href="#nav_bar"><button class="btn">Home</button></a>
            <a href="help.html"><button class="btn">Help</button></a>
            <div class="user">
                <img src="../images/user.png" alt="user" id="ui">
                <button class="btn"><?php echo $name; ?></button>
                <div class="user_menu">
                    <a href="history.php">My History</a><br>
                    <hr>
                    <hr>
                    <a href="../php/delete.php">Delete Account</a>
                    <hr>
                    <hr>
                    <a href="../php/logout.php">Log Out</a>
                    <hr>
                    <hr>
                </div>
            </div>
        </div>
    </section>
</body>
</html>