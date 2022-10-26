<?php

include('database.php');
/* Getting about user type
if pap = 0 ==> means it is a user
if pap = 1 ==> means it is a admin
*/
$typ = $_GET['pap'];   
if($typ == '0'){
session_start();
$res = loginuser($_GET);
$name = $res['username'];
$user_id = $res['user_id'];
$_SESSION['username'] = $name;
$_SESSION['user_id'] = $user_id;
header('location:logged_home.php');
}

if ($typ == '1')
{
session_start();
$res = loginadmin($_GET);
$name = $res['paper_name'];
$_SESSION['paper_name'] = $name;
header('location:admin_home.php');
}
?>