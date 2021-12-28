<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<section class="bg"> 
        <div>
            <center>
                <form action="register.php" method="post">
                    <table>

                        <tr>
                            <input type="text" id="pap" name="pap" value = "adver" readonly hidden>
                        </tr>

                        <tr>
                            <td>
                                <label for= "ad_type">Select Your Ad Type-</label><br>
                            </td>
                      </tr>
                        <tr>
                            <td>
                                <input type="text" id="ad_type" name="ad_type" placeholder="Enter Your Title" required><br><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <label for="line">Enter your Ad-lines -</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="text" id="line" name="line" placeholder="Description of Article"><br><br>
                                <!-- <textarea name="desc" id="desc" cols="30" rows="10"></textarea> -->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <div style="display: flex;">
                                <div style="width: 25%;"><hr></div>
                                <div style="width: 13.33%; margin-left:10px">OR</div>
                                <div style="width: 25%;"><hr></div>
                                </div>
                            </td>
                        </tr>

                        <tr>
                            <td>
                                <label for="upload">Upload your file</label><br>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="file" id="upload" name="upload" placeholder="Name of Author"><br><br>
                                <!-- <textarea name="n_desc" id="n_desc" cols="30" rows="10"></textarea> -->
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <input type="submit" Value="Request Approval">
                            </td>
                        </tr>
                    </table>
                </form>
            </center>
        </div>
    </section>
</body>
</html>