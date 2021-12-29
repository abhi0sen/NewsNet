<?php
// echo "aagya";
session_start();
$name = $_SESSION['username'];
// echo "name is : ".$name;
$con = mysqli_connect('localhost', 'root', '', 'newsnet') or die("connection failed");
$query = "select * from newspaper";
$res = mysqli_query($con, $query);
$res1 = mysqli_query($con, $query);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css_styles/home_page.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
    <style>
        .contact {
            padding: 36px 0;
            /* height: 400px; */
            z-index: 0;
            /* display: flex; */
        }

        .option {
            margin-left: 6.5%;
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
            background-color: #F9D30F;
            min-height: 10vh;
            margin-left: 150px;
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
            min-width: 120px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            padding: 5px;
            z-index: 2;
            text-align: left;
        }

        .user:hover .user_menu {
            display: block;
        }

        .user_menu a {
            text-decoration: none;
            color: black;
            margin-top: 10px;
            margin-right: 5px;
        }

        /* .article{
            display: none;
        } */
        #art {
            cursor: pointer;
        }

        #note {
            padding-top: 40px;
            font-size: 30px;
        }

        .images {
            margin: 0 50px;
        }

        .images div {
            background-color: #C4C4C4;
            /* width: 150px;
            height: 180px; */
            /* overflow: hidden; */
        }

        .images div img {
            /* margin: 4px 4px; */
            margin-left: 4px;
            margin-right: 4px;
            margin-top: 4px;
            width: 95%;
            height: 70px;
        }

        .pub,
        .news {
            margin: 4px 4px;
            /* margin-right: 5px;  */
            background-color: #F9710F;
            width: 88%;
            justify-content: center;
            align-content: center;
            text-align: center;
        }

        .news {
            background-color: #FAE105;
        }

        .news_ad {
            justify-content: center;
            text-align: center;
            align-content: center;
            background-color: #C4D7F2;
            height: 600px;
        }

        .img_gal {
            margin: 50px;
            text-align: center;
            align-content: center;
            justify-content: center;
            display: flex;
        }

        #id {
            cursor: pointer;
        }

        #whatsapp a {
            text-decoration: none;
        }

        #ad {
            cursor: pointer;
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#art").click(function() {
                $("#news_a").hide();
                $("#article").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#ad").click(function() {
                $("#article").hide();
                $("#news_a").slideToggle();
            });
        });
    </script>
</head>

<body>
    <section class="nav_bar" id="nav_bar">
        <div class="logo">
            <img src="../images/logo.png" alt="news.net">
        </div>
        <div class="button">
            <a href="#nav_bar"><button class="btn">Home</button></a>
            <a href="#contact"><button class="btn">Contact Us</button></a>
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

    <section class="news_sec contact">
        <center>
            <b>
                <p style="padding-top: 10px; font-size: 40px;">Tell Us What Do You Want To Post</p>
            </b>
        </center>
        <div class="option">
            <div id="art">
                <b>
                    <p>Article</p>
                </b>
            </div>
            <div id="ad">
                <b>
                    <p>Advertisement/News</p>
                </b>
            </div>
        </div>
    </section>
    <hr>
    <section class="news_sec" id="article" hidden>
        <div class="note">
            <center>
                <h1>Select Newspaper To Send Article</h1>
            </center>
        </div>
        <div>
            <table>
                <tr>
                    <?php

                    while ($arr = mysqli_fetch_array($res)) {
                    ?>
                <tr>
                    <td><a href="articles.html"><button><img src="<?php echo $arr['filepath']; ?>" alt="jskdf"></button></a></td>
                </tr>
            <?php
                    }
            ?>
            </tr>
            </table>
            <!-- <center>
                <a href="articles.html"><button class="paper_button"><img src="../images/toi.png" alt="Times Of India"></button></a>
                <a href="articles.html"><button class="paper_button"><img src="../images/fpj.png" alt="Free Press"></button></a>
                <a href="articles.html"><button class="paper_button"><img src="../images/hindu.png" alt="Times Of India"></button><br></a>

                <a href="articles.html"><button class="paper_button"><img src="../images/db.png" alt="Times Of India"></button></a>
                <a href="articles.html"><button class="paper_button"><img src="../images/patrika.png" alt="Free Press"></button></a>
                <a href="articles.html"><button class="paper_button"><img src="../images/ND.png" alt="Times Of India"></button><br></a>
            </center> -->
        </div>
    </section>

    <section class="news_ad" id="news_a" hidden>
        <div id="note">
            <center>
                <b> Get Your Advertisement or News Approval from Popular Newspaper</b>
            </center>
        </div>
        <div class="img_gal">
            <div class="images">
                <div>
                    <!-- <img src="../images/fpj.png" alt="Free Press"> -->
                    <table cellspacing = "10px">
                        <tr>
                            <th align="center">Paper Image</th>
                            <th align="center">Price/cm sq</th>
                            <th colspan="2" align="center">Options</th>
                        </tr>
                        <?php
                        while ($arr = mysqli_fetch_array($res1)) {
                        ?>
                            <tr>
                                <td><img src="<?php echo $arr['filepath']; ?>" alt="jskdf"></td>
                                <center>
                                    <td>

                                        <p><?php echo $arr['price'] ?></p>
                                        
                                    <td><a href="advertisement.php"><button class="pub">Publish Ad</button></a></td>
                                    <td><a href="news.php"><button class="news">Post News</button></a></td>
                                    </td>
                                </center>
                            </tr>
                        <?php
                        }
                        ?>
                        </tr>
                    </table>

                </div>
            </div>

        </div>
    </section>

    <hr>

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