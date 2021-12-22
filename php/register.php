<?php
$username = $_POST['username'];
$contact = $_POST['contact'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$password = $_POST['pass'];

$con = mysqli_connect('localhost', 'root', '', 'newsnet');
if ($con) {
    $query = "insert into user (username, contact_no, address, email, password) value('$username', '$contact', '$address', '$mail', '$password')";
    $res = mysqli_query($con, $query);
    $query1 = "select * from user";
    $res1 = mysqli_query($con, $query1);
    echo $query.$res."<br>";


    if ($res1)
    {
        $count = mysqli_num_rows($res1); // count rows in a table
        while ($result = mysqli_fetch_array($res1))
        {
            // $result = mysqli_fetch_row($res1); //single record
        // $result = mysqli_fetch_assoc($res1);    //associative array k form m
        // $result = mysqli_fetch_array($res1);        //index or associative array k form m
        // print_r($result);
        // $name = $result['name'];
        $id = $result['user_id'];
        $username = $result['username'];
        $contact = $result['contact_no'];
        $mail = $result['email'];
        $address = $result['address'];
        $password = $result['password'];
        echo $id.$username.$contact.$mail.$address.$password."<br>";
     }
    }
    else 
    {
        echo "failed";
    }
}
// echo "<br>";
// echo'<form action="list_append.php" method="post">
//             <label for="name">Enter Your Name</label>
//             <input type="text" id="name" name="name">
//             <br>
//             <input type="submit" value= "add">
//         </form>';
?>

<!-- header ("location : assign2.php") -->