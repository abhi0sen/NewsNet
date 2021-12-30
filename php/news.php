<?php
$paper = $_GET['paper'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper Network</title>
    <link rel="stylesheet" href="../css_styles/art_ad_news.css">
</head>
<body>
<?php
include ('nav_bar.php');
?>
<section class="bg">
<div>
    <b><p>Publish Your News in <br><?php echo $paper ?></p></b>
</div>
        <div class = "form">
            <center>
                <form action="register.php" method="post">
                    <table>
                    <tr>
                        <input type="text" id="paper" name="paper" value = "<?php echo $paper ?>" readonly hidden>
                        </tr>
                    <input type="text" id="pap" name="pap" value = "news" readonly hidden>
                        <tr>
                            <td>
                                <label for="type">Select News Type-</label><br>
                            </td>
                      </tr>
                        <tr>
                            <td>
                                <input type="text" id="type" name="type" placeholder="Enter Your Title" required><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="headline">Enter Headline of News -</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="headline" name="headline" placeholder="Description of Article"><br><br>
                                <!-- <textarea name="desc" id="desc" cols="30" rows="10"></textarea> -->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="city">Incident City</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="city" name="city" placeholder="Name of Author"><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="n_desc">News Description</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <!-- <input type="text" id="desc" name="desc" placeholder="Name of Author"><br><br> -->
                                <textarea name="n_desc" id="n_desc" cols="30" rows="5" required></textarea>
                            </td>
                        </tr>
                        <br><br>
                        <tr>
                            <td align="center">
                                <input type="submit" Value="Request Approval">
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