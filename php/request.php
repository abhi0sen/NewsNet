<?php
    $request = $_GET['request'];

    // if ($request == 'Accepted')
    $p_id = $_GET['post_id'];
    include('database.php');
    $acc = acceptRequest($p_id, $request);
    echo $request;
    // header('location:admin_home.php');

?>