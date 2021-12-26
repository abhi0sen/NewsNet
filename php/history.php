<?php
// echo "aagya";
session_start();
$name = $_SESSION['username'];
// echo "name is : ".$name;
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
        .user {
            position: relative;
            display: inline-block;
        }

        #ui {
            width: 20px;
            height: 20px;
            margin-right: 0;
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
        .his_note{
            /* margin: 0;
            padding: 0; */
            background-color: orange;
            width: 99.4%;
            height: 200px;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        .his_note p{
            margin-top: 10px;
            padding: 5px;
        }
        .his_tbl{
            background-color: rgb(200, 122, 0);
            width: 99.4%;
            height: 200px;
            text-align: center;
            align-items: center;
            justify-content: center;
        }
        table{
            /* margin-top: 20px; */
            border: 2px solid black;
        }
        table, th, td{
            border: 1px Solid black;
            text-align:center;
        }
    </style>
</head>
<body>
<section class="nav_bar">
        <div class="logo">
            <img src="../images/logo.png" alt="news.net">
        </div>
        <div class="button">
            <a href="logged_home.php"><button class="btn">Home</button></a>
            <a href="logged_home.php.#contact"><button class="btn">Contact Us</button></a>
            <a href="help.html"><button class="btn">Help</button></a>
            <img src="../images/user.png" alt="user" id="ui">
            <div class="user">
                <button class="btn"><?php echo $name; ?></button>
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

        <section class="his_note">
            <div >
                <b><p style="font-size: 30px;">Your Order History</p></b>
                <p style="font-size: 15px;">Find Your Order History Below in the Page</p>
            </div>
        </section>
        
        <section class="his_tbl">
            <center>
                <br><br>
            <div>
                <table align="center">
                    <tr>
                        <th>S.No.</th>
                        <th>Post Id</th>
                        <th>Apply Date</th>
                        <th>Paper Name</th>
                        <th>Post Category</th>
                        <th>Amount</th>
                        <th>Status</th>
                    </tr>
                    <tr>
                        <td>1.</td>
                        <td>12333</td>
                        <td>12th jan 2020</td>
                        <td>Times Of India</td>
                        <td>Article</td>
                        <td>0</td>
                        <td>Sent</td>
                    </tr>
                    <tr>
                        <td>2.</td>
                        <td>32334</td>
                        <td>343534</td>
                        <td>The Hindu</td>
                        <td>Advertisement</td>
                        <td>500Rs</td>
                        <td>Approved</td>
                    </tr>
                </table>    
            </div>
            </center>
        </section>

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