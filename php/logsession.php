<?php

include('database.php');
$typ = $_GET['pap'];
if($typ == '0'){
session_start();
$res = loginuser($_GET);
$name = $res['username'];
$_SESSION['username'] = $name;
// echo "$name";
header('location:logged_home.php');
}
if ($typ == '1')
{
session_start();
$res = loginadmin($_GET);
$name = $res['paper_name'];
$_SESSION['paper_name'] = $name;
// echo "$name";
header('location:admin_home.php');
}
?>