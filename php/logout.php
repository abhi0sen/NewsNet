<?php
session_start();
$name = $_SESSION['username'];
// if (isset($name)) {
    session_destroy();
    header('location:../index.html');   
// }
?>