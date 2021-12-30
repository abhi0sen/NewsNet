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
    <style>
        #nav_bar{
            padding: 15px 0;
            /* height: 80px; */
        }
    </style>
</head>
<body>
<section class="nav_bar" id="nav_bar">
        <div class="logo">
            <a href="logged_home.php"><img src="../images/logo.png" alt="news.net"></a>
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