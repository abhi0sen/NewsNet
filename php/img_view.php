<?php

// session_start();
$con = mysqli_connect('localhost', 'root', '', 'newsnet') or die ("connection failed");
$article = "select * from article";
$res = mysqli_query($con, $article);
// echo $title.$description.$authorname;
?>

<table border="2px" align="center" style="width:60%;">
    <tr>
        <th>Title</th>
        <th>Description</th>
        <th>Author Name</th>
    </tr>
    <tr>
                <?php

                    while($arr = mysqli_fetch_array($res))
                    {
                ?>
                <tr>
                    <td><?php echo $arr['title']?></td>
                    <td><?php echo $arr['description']?></td>
                    <td><?php echo $arr['author_name'];?></td>
                </tr>
                <?php
                    }
                    ?>
            </tr>
</table>