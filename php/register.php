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
    $filepath = $_FILES['filep'];

    $tempath = $_FILES['filep']['tmp_name'];
    echo $tempath;
    echo "<br>";
    $fname = $_FILES['filep']['name'];
    echo $fname;
    $a = explode(".", $fname);
    $text = $a[count($a) - 1];
    echo "<br>" . $text;
    $newname = time() . "." . $text;
    echo "<br>" . $newname;

    $uploadpath = "img/$newname";
    echo "<br>" . $uploadpath;

    $res = move_uploaded_file($tempath, $uploadpath);
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
    $paper = $_POST['paper'];
    $ad_type = $_POST['ad_type'];
    $line = $_POST['line'];
    $upload = $_FILES['upload'];

    $tempath = $_FILES['upload']['tmp_name'];
// echo $tempath;
// echo "<br>";
$fname = $_FILES['upload']['name'];
// echo $fname;
$a = explode(".", $fname);
$text = $a[count($a)-1];
// echo "<br>".$text;
$newname = time().".".$text;
// echo "<br>".$newname;

$uploadpath = "img/$newname";
// echo "<br>".$uploadpath;

$res = move_uploaded_file($tempath, $uploadpath);

}
else if($typ == 'news'){
    session_start();
    // $post_id = $_SESSION['post_id'];
    $paper = $_POST['paper'];
    $type = $_POST['type'];
    $headline = $_POST['headline'];
    $city = $_POST['city'];
    $n_desc = $_POST['n_desc'];
}
else if($typ == '1.1'){
    session_start();
    $paper_name = $_POST['paper_name'];
    $price = $_POST['price'];
    $mail = $_POST['m_id'];
    $cont = $_POST['cont'];
}
else if($typ = 'forgot0')
{
    $phone = $_POST['phone'];
    $pass = $_POST['password'];
    echo $phone.$pass;
}

$con = mysqli_connect('localhost', 'root', '', 'newsnet') or die("Connection Failed");
if ($con && $typ == '0') {
    $query = "insert into user (username, contact_no, address, email, password) value('$username', '$contact', '$address', '$mail', '$password')";
    $res = mysqli_query($con, $query);
    header('location:sign_in.html');
}
else if($con && $typ == '1')
{
    $pap_query = "insert into newspaper (paper_name, price, contact_no, mail_id, password, filepath) value('$papername', '$price', '$cont', '$mail', '$pass', '$uploadpath')";
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
            echo "<h1> News Insert Failed</h1>";
        }
}
else if ($con && $typ == 'adver')
{
    // session_start();
    $user_id = $_SESSION['user_id'];
    $post_query = "insert into post (user_id, type, paper_name) value ($user_id, 'Advertisement', '$paper')";
    mysqli_query($con, $post_query);  
    $data = post($_GET);
    $p_id = $data['post_id'];
    apply($user_id, $p_id);
    $result = insertAd($p_id, $ad_type, $line, $uploadpath);
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
    $post_query = "insert into post (user_id, type, paper_name) value ($user_id, 'News', '$paper')";
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

else if($con && $typ == '1.1'){
    $query = "update newspaper set price = $price, mail_id = '$mail', contact_no = '$cont' where paper_name = '$paper_name'";
    $res = mysqli_query($con, $query);
    echo $res;
    header('location:admin_home.php');
}
else if ($con && $typ =='forgot0')
{
    $query = "update user set password = '$pass' where contact_no = '$phone'";
    $res = mysqli_query($con, $query);
    // echo $query.$res;
}
?>