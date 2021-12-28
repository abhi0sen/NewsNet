<?php

include('database.php');
$typ = $_GET['pap'];
if($typ == '0'){
session_start();
$res = loginuser($_GET);
$name = $res['username'];
$user_id = $res['user_id'];
$_SESSION['username'] = $name;
$_SESSION['user_id'] = $user_id;
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
