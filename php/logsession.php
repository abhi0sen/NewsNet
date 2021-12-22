<?php

include('database.php');
session_start();
$res = loginuser($_GET);

$name = $res['username'];

$_SESSION['username'] = $name;
echo "$name";
header('location:../html/logged_home.php')
?>