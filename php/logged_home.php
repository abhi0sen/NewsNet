<?php
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
    <link rel="stylesheet" href="../css_styles/logged_home.css">
    <script src="../js/jquery-3.6.0.min.js"></script>
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
    <?php
    include('nav_bar.php')
    ?>

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
                    <td><a href="articles.php"><button><img src="<?php echo $arr["filepath"]; ?>" alt="<?php echo $arr["paper_name"]; ?>"></button></a></td>
                    
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
                            <th align="center">Paper Name</th>
                            <th align="center">Price/cm sq</th>
                            <th colspan="2" align="center">Options</th>
                        </tr>
                        <?php
                        while ($arr = mysqli_fetch_array($res1)) {
                        ?>
                            <tr>
                                <td><img src="<?php echo $arr['filepath']; ?>" alt="jskdf"></td>
                                <center>
                                    <td><p><?php echo $arr['paper_name'] ?></p></td>
                                    <td>
                                        <p><?php echo $arr['price'] ?></p></td>
                                    <td><button class="pub">
                                        <form action="advertisement.php" method="get">
                                            <input type="text" name="paper" id="paper" value="<?php echo $arr['paper_name'] ?>" readonly hidden>
                                            <input type="submit" value="Publish ad" class="pub"  style="padding-right: 8px;">
                                        </form>
                                    </button></td>
                                    <td><button class="news"><form action="news.php" method="get">
                                            <input type="text" name="paper" id="paper" value="<?php echo $arr['paper_name'] ?>" readonly hidden>
                                            <input type="submit" value="Post News" class="news" style="padding-right: 8px;">
                                        </form></button></td>
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
<?php
include ('footer.php');
?>
    <!-- <section class="footer">
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
    </section> -->
</body>

</html>