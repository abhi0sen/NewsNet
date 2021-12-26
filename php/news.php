<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Send News</title>
</head>
<body>
<section class="bg">
        <div>
            <center>
                <form action="">
                    <table>
                        <tr>
                            <td>
                                <label for="type">Select News Type-</label><br>
                            </td>
                      </tr>
                        <tr>
                            <td>
                                <input type="text" id="type" name="type" placeholder="Enter Your Title"><br><br>
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
                                <textarea name="n_desc" id="n_desc" cols="30" rows="10"></textarea>
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