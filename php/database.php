<?php

$con = mysqli_connect('localhost', 'root', '', 'newsnet') or die ("connection failed");

function loginuser($array)
{
    global $con;

    $user = $array['username'];
    $pass = $array['password'];
    echo $user." : ".$pass;

        $query = "select * from user where username='$user' and password = '$pass'";

        $result = mysqli_query($con, $query);
        $res = mysqli_fetch_array($result);
        return $res;
}
