<?php
$con = mysqli_connect('localhost', 'root', '', 'newsnet') or die("Connection Failed");
session_start();
$name = $_SESSION['username'];

$query = "delete from user where username = '$name'";
$res = mysqli_query($con, $query);
header('location:Sign_in.html');
?>