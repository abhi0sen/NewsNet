<?php
echo "aagya <br>";
session_start();
$name = $_SESSION['paper_name'];
echo "name is : ".$name;
?>

<form action="logout.php">
    <input type="text" id="pap" name="pap" value="1" readonly hidden>
    <input type="submit" value="Log Out">
</form>
