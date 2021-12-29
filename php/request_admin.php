<?php
session_start();
include('database.php');
$pap_name = $_SESSION['paper_name'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .section {
            width: 50%;
            background-color: whitesmoke;
            text-align: center;
        }
    </style>
</head>

<body>
    <div style="display: flex;">
        <div class="section"><button class="pub"><?php $p_type = 'advertisement' ?> Advertisement</button></div>

        <div class="section"><button class="news"><?php $p_type = 'news' ?>News</button></div>
    </div>
    <?php
        $data = request('$pap_name', '$p_type');
    ?>
    <section>
        <table>
            <tr align="center">
                <th>Ad Type </th>
                <th>Description </th>
                <th>User Id</th>
                <th>User Id</th>
            </tr>
            <tr>
                <?php

                    while($arr = mysqli_fetch_array($data))
                    {
                ?>
                <tr>
                    <td><?php echo $arr['paper_name']?></td>
                    <td><img src="<?php echo $arr['user_id']?>" alt="<?php echo $arr['file_desc']?>"></td>
                    <td><?php echo $arr['post_id'];?></td>
                    <td><?php echo $arr['type'];?></td>
                </tr>
                <?php
                    }
                    ?>
            </tr>
        </table>
    </section>
</body>
</html>