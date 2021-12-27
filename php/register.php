<?php
$typ = $_POST['pap'];
if($typ == '0'){
$username = $_POST['username'];
$contact = $_POST['contact'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$password = $_POST['password'];
}


if($typ == '1'){
    $papername = $_POST['paper_name'];
    $price = $_POST['price'];
    $mail = $_POST['m_id'];
    $cont = $_POST['cont'];
    $pass = $_POST['pass'];
    }

$con = mysqli_connect('localhost', 'root', '', 'newsnet') or die("Connection Failed");
if ($con && $typ == '0') {
    $query = "insert into user (username, contact_no, address, email, password) value('$username', '$contact', '$address', '$mail', '$password')";
    $res = mysqli_query($con, $query);
    header('location:sign_in.html');
}
else if($con && $typ == '1')
{
    $pap_query = "insert into newspaper (paper_name, price, contact_no, mail_id, password) value('$papername', '$price', '$cont', '$mail', '$pass')";
    $pap_res = mysqli_query($con, $pap_query);   
    header('location:sign_in.html');
}
?>