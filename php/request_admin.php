<?php
session_start();
include('database.php');
$pap_name = $_SESSION['paper_name'];
$p_type = $_GET['type'];
// echo $p_type;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newspaper Network</title>
    <style>
        .sections {
            margin-left: 23%;
            width: 50%;
            text-align: center;
            padding: 2%;
            color: black;
            border: 2px solid black;
        }

        .backg {
            background: rgba(0, 0, 0, 0.4) url('../images/request.jpg');
            background-size: cover;
            background-blend-mode: darken;
            padding: 30px;
        }

        table {
            /* background-color: whitesmoke; */
            padding: 30px;
            color: black;
        }

        td,
        th {
            background-color: lightgrey;
            padding: 20px;
        }

        .request {
            padding: 5px;
            width: 60px;
        }
    </style>

<!-- <script>
        $(document).ready(function() {
            $("#accept").click(function() {
                $("#frm").hide();
                // $("#article").slideToggle();
            });
        });
        $(document).ready(function() {
            $("#reject").click(function() {
                $("#frm").hide();
                // $("#news_a").slideToggle();
            });
        }); -->
    <!-- </script> -->
</head>

<body>
    <?php
    include('admin_nav.php');
    ?>
    <section class="backg">
        <div>
            <div>
                <div style="background-color: lightgrey;" class="sections">
                    <p><?php echo $p_type ?></p>
                </div>
            </div>
            <br><br>
            <?php
            $data = request($pap_name, $p_type);
            ?>
            <section>
                <center>
                    <table cellspacing="20" align="center" padding="30px" border="2px solid black">
                        <tr align="center">
                            <th>paper_name</th>
                            <th>User Id</th>
                            <th>post_id </th>
                            <th>type</th>
                            <th>Request</th>
                        </tr>
                        <tr>
                            <?php
                            while ($arr = mysqli_fetch_array($data)) {
                            ?>
                        <tr>
                            <td><?php echo $arr['paper_name'] ?></td>
                            <td><?php echo $arr['user_id'] ?></td>
                            <td><?php echo $arr['post_id']; ?></td>
                            <td><?php echo $arr['type']; ?></td>
                            <td>
                                <form action="request.php" id="frm"><input type="text" name="post_id" value=<?php echo $arr['post_id'] ?> readonly hidden>
                                    <input type="text" name="price" placeholder="enter final price"><input type="Submit" id="accept" name="request" value="Accept" class="request">
                                </form>
                                <br>
                                <center>
                                    <form action="request.php" id="frm">
                                        <input type="text" name="post_id" value=<?php echo $arr['post_id'] ?> readonly hidden>
                                        <input type="Submit" id="reject" name="request" value="Reject" class="request">
                                    </form>
                                </center>
                            </td>
                        </tr>
                    <?php
                            }
                    ?>
                    </tr>
                    </table>
                </center>
            </section>
    </section>
</body>

</html>
<?php
include('footer.php');
?>