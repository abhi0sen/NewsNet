<?php
$name = $_SESSION['paper_name'];
?>
<html>
<head>
<link rel="stylesheet" href="../css_styles/admin_style.css">
<link rel="stylesheet" href="../css_styles/logged_home.css">

<style>
    #backs{
        background: #9CD960;
        padding: 7px 0;
    }
    /* .user_menu a{
        color: black;
    } */
    #rm a{
        color: black;
    }
</style>
</head>
<body>
<nav class="Nav_bar background" id="backs">
        <ul class="nav-list">
            <div class="logo"><a href="admin_home.php"><img src="../images/logo.png" alt="Logo"></a></div>
            <li><a href="admin_home.php"> Home </a></li>
            <!-- <li><a href="request_admin.php"> Request </a></li> -->
            <li><div class="user">
                <!-- <img src="../images/user.png" alt="user" id="ui"> -->
                <a href="request_home.php">Request</a>
                <div class="user_menu" id="rm" >
                    <!-- <a href="history.php">News</a><br> -->
                    <form action="request_admin.php"><input type="submit" name="type" value="News"></form>
                    <!-- <a href="delete.php">Advertisements</a> -->
                    <form action="request_admin.php"><input type="submit" name="type" value="Advertisement"></form>

                </div>
            </div></li>
            <li><a href="setting.php"> Profile </a></li>
            <!-- <li><a href="#service"> Services </a></li> -->
            <!-- <li><a href="#contact"> contact us </a></li> -->
        </ul>
        <div class="rightnav">
            <button class="btn btn-sm"> <?php echo $name ?> </button>
            <a href="logout.php"><button class="btn btn-sm"> Log Out</button></a>
        </div>  
    </nav>
    </body>
    </html>

