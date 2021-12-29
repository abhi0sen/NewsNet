<?php
$paper = $_GET['paper'];
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Article</title>
    <link rel="stylesheet" href="../css_styles/art_ad_news.css">
    <!-- <link rel="stylesheet" href="../css_styles/home_page.css"> -->
    <!-- <link rel="stylesheet" href="../css_styles/logged_home.css"> -->
</head>
<body> 
    <?php
    include('nav_bar.php');?>
    <section class="bg firstsection">
        <div>
            <b><p>Send Your Article</p></b>
        </div>

        <div class="form">
            <center>
                <form action="register.php" method="post">
                    
                    <table>
                        <tr><td><input type="text" name="paper" id="paper" value="<?php echo $paper ?>" readonly></td></tr>
                        <tr hidden><td><input type="text" name="pap" id="pap" value="article" readonly></td></tr>
                        <tr>
                            <td>
                                <label for="title">Title Of Article -</label><br>
                            </td>
                      </tr>
                        <tr>
                            <td>
                                <input type="text" id="title" name="title" placeholder="Enter Your Title" required><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="desc">Description of Article -</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <input type="text" id="desc" name="desc" placeholder="Description of Article"><br><br> -->
                                <textarea name="desc" id="desc" cols="30" rows="10" placeholder="Type Your Article Content" required></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="auth">Author Name</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="auth" name="auth" placeholder="Name of Author" required><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" Value="Send">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </section>
    <?php
include ('footer.php');
?>
</body>
</html>