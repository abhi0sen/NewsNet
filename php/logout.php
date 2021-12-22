<?php
session_start();
$name = $_SESSION['name'];
if (isset($name)) {
    session_destroy();
    header('location:../index.html');   
}
?>