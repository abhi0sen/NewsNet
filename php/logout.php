<?php
session_start();
$name = $_SESSION['username'];
$pap_name = $_SESSION['paper_name'];
if (isset($name)) {
    session_destroy();
    header('location:../index.html');   
}
else if (isset($pap_name)) {
    session_destroy();
    header('location:../index.html');   
}
?>