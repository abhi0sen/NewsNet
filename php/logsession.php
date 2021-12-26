<?php

include('database.php');
$typ = $_POST['pap'];
session_start();
$res = loginuser($_GET);
$name = $res['username'];
$_SESSION['username'] = $name;
// echo "$name";
header('location:logged_home.php')
?>