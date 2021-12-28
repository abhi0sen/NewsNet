<?php
include('database.php');
$typ = $_POST['pap'];
if($typ == '0'){
$username = $_POST['username'];
$contact = $_POST['contact'];
$mail = $_POST['mail'];
$address = $_POST['address'];
$password = $_POST['password'];
}

else if($typ == '1'){
    $papername = $_POST['paper_name'];
    $price = $_POST['price'];
    $mail = $_POST['m_id'];
    $cont = $_POST['cont'];
    $pass = $_POST['pass'];
    }

else if($typ == 'article'){
    session_start();
    // $post_id = $_SESSION['post_id'];
    $title = $_POST['title'];
    $desc = $_POST['desc'];
    $auth = $_POST['auth'];
}
else if($typ == 'adver'){
    session_start();
    // $post_id = $_SESSION['post_id'];
    $ad_type = $_POST['ad_type'];
    $line = $_POST['line'];
    $upload = $_POST['upload'];
}
else if($typ == 'news'){
    session_start();
    // $post_id = $_SESSION['post_id'];
    $type = $_POST['type'];
    $headline = $_POST['headline'];
    $city = $_POST['city'];
    $n_desc = $_POST['n_desc'];
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

if ($con && $typ == 'article')
{
    // session_start();
    $user_id = $_SESSION['user_id'];
    $post_query = "insert into post (user_id, type) value ($user_id, 'article')";
    mysqli_query($con, $post_query);  

    $data = post($_GET);
    $p_id = $data['post_id'];
    
    apply($user_id, $p_id);

    $result = insertArticle($p_id, $title, $desc, $auth);
        if($result)
        {
            header('location:logged_home.php');
        }
        else
        {
            echo "<h1> News Insert FailedM</h1>";
        }
}
else if ($con && $typ == 'adver')
{
    // session_start();
    $user_id = $_SESSION['user_id'];
    $post_query = "insert into post (user_id, type) value ($user_id, 'Advertisement')";
    mysqli_query($con, $post_query);  
    $data = post($_GET);
    $p_id = $data['post_id'];
    apply($user_id, $p_id);
    $result = insertAd($p_id, $ad_type, $line, $upload);
    if($result)
    {
        header('location:logged_home.php');
    }
    else
    {
        echo "<h1> News Insert FailedM</h1>";
    }
}
else if ($con && $typ == 'news')
{
    // session_start();
    $user_id = $_SESSION['user_id'];
    $post_query = "insert into post (user_id, type) value ($user_id, 'News')";
    mysqli_query($con, $post_query);
    // $rs = post();
    // $post_id = $rs['post_id'];
    
    $data = post($_GET);

    $p_id = $data['post_id'];

    apply($user_id, $p_id);


    $result=insertNews($p_id, $type, $headline, $n_desc, $city);
    if($result)
    {
        header('location:logged_home.php');
    }
    else
    {
        echo "<h1> News Insert FailedM</h1>";
    }

}
?>