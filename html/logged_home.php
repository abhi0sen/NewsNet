<?php
echo "aagya";
session_start();
$name = $_SESSION['name'];
echo "name is : ".$name;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css_styles/home_page.css">
    <style>
        .contact {
            height: 400px;
            z-index: 0;
        }

        .option {
            padding-top: 30px;
            text-align: center;
            display: flex;
            z-index: 1;
            overflow: hidden;
            align-items: center;
        }

        .option div {
            /* position: static; */
            min-width: 30%;
            background-color: red;
            min-height: 10vh;
            margin-left: 100px;
        }

        .option p {
            margin: 20%;
            font-size: 30px;
        }

        #ui {
            width: 20px;
            height: 20px;
            margin-right: 0;
        }

        .user {
            position: relative;
            display: inline-block;
        }

        .user_menu {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 80px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 5px;
            z-index: 2;
            text-align: center;
        }

        .user:hover .user_menu {
            display: block;
        }

        .user_menu a {
            text-decoration: none;
            color: black;
            margin-top: 10px;
        }
    </style>
</head>

<body>
    <section class="nav_bar">
        <div class="logo">
            <img src="../images/logo.png" alt="news.net">
        </div>
        <div class="button">
            <button class="btn">Home</button>
            <button class="btn">Contact Us</button>
            <button class="btn">Help</button>
            <img src="../images/user.png" alt="user" id="ui">
            <div class="user">
                <button class="btn">Username</button>
                <div class="user_menu">
                    <a href="history.html">My History</a><br>
                    <hr>
                    <hr>
                    <a href="../php/logout.php">Log Out</a>
                    <hr>
                    <hr>
                </div>
            </div>
        </div>
    </section>

    <section class="news_sec contact">
        <center>
            <b>
                <p style="padding-top: 10px; font-size: 40px;">Tell Us What Do You Want To Post</p>
            </b>
        </center>
        <div class="option">
            <div>
                <b>
                    <p>Article</p>
                </b>
            </div>
            <div>
                <b>
                    <p>Advertisement/News</p>
                </b>
            </div>
        </div>
    </section>
    <hr>
    <section class="news_sec">
        <div class="note">
            <center>
                <h1>Select Newspaper To Send Article</h1>
            </center>
        </div>
        <div>
            <center>
                <button class="paper_button"><img src="../images/toi.png" alt="Times Of India"></button>
                <button class="paper_button"><img src="../images/fpj.png" alt="Free Press"></button>
                <button class="paper_button"><img src="../images/hindu.png" alt="Times Of India"></button><br>

                <button class="paper_button"><img src="../images/db.png" alt="Times Of India"></button>
                <button class="paper_button"><img src="../images/patrika.png" alt="Free Press"></button>
                <button class="paper_button"><img src="../images/ND.png" alt="Times Of India"></button><br>
            </center>
        </div>
    </section>
    <hr>
    <section class="news_sec contact">
        <div style="font-size: 30px;">
            <div">
                <center>
                    <h1>Contact Us</h1>
                </center>
        </div>
        <section class="c_us">
            <div class="c_us1">
                <div>
                    <p id="c_us_h"><b>What are you thinking about?</b></p>
                    <br>
                    <p id="c_us_d">
                        Have a story idea for us? <br>
                        Would you like to write for us?
                        <br>
                        Send us a message and let us know what you are thinking about.
                    </p>
                </div>
                <div>
                    <button id="whatsapp">
                        <img src="../images/whatsapp.png" alt="">Message us on Whatsapp
                    </button>
                </div>
            </div>
            </div>
            <div class="c_us2">
                <img src="../images/con_img.png" alt="">
            </div>

            <section class="footer">
                <center>
                    <b>
                        <p style="font-size: 20px;">Follow us</h3>
                    </b><br>
                    <a href="www.facebook.com"><img src="../images/facebook.png" alt="facebook"></a>
                    <a href="www.instagram.com"><img src="../images/instagram.png" alt="instagram"></a>
                    <a href="www.twitter.com"><img src="../images/twitter.png" alt="twitter"></a>
                    <br>
                    <em>
                        <p style="font-size: 10px;">COPYRIGHT © 2021 NEWS.NET - ALL RIGHTS RESERVED</p>
                    </em>
                </center>
            </section>
</body>

</html>