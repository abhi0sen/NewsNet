<?php

$con = mysqli_connect('localhost', 'root', '', 'newsnet') or die ("connection failed");

function loginuser($array)
{
    global $con;

    $user = $array['username'];
    $pass = $array['password'];
    // echo $user." : ".$pass;

        $query = "select * from user where username='$user' and password = '$pass'";

        $result = mysqli_query($con, $query);
        $res = mysqli_fetch_array($result);
        return $res;
}

function loginadmin($array)
{
    global $con;

    $pap_name = $array['paper_name'];
    $pass = $array['pass'];
    // echo $user." : ".$pass;

        $query = "select * from newspaper where paper_name='$pap_name' and password = '$pass'";

        $result1 = mysqli_query($con, $query);
        $res = mysqli_fetch_array($result1);
        return $res;
}

function post()
{
    global $con;

        $query = "select * from post where post_id=(select max(post_id) from post);";

        $result1 = mysqli_query($con, $query);
        $res = mysqli_fetch_array($result1);
        return $res;
}
function apply($user_id, $post_id)
{

    global $con;
    $apply_query = "insert into apply_for values ($user_id, curDate(), $post_id)" ;
    mysqli_query($con, $apply_query);


}
function insertNews($p_id, $type, $headline, $n_desc, $city)
{
    global $con;
    $news_query = "insert into news (post_id, news_type, headline, news_desc, incident_city) values ($p_id, '$type', '$headline', '$n_desc', '$city')";
    mysqli_query($con, $news_query);
    $count = mysqli_affected_rows($con);
    return $count;
}
function insertAd($p_id, $ad_type, $line, $upload)
{
    global $con;
    if($line != ""){
        $ad_query = "insert into advertisement (post_id, ad_type, file_desc) values ($p_id, '$ad_type', '$line')";
        mysqli_query($con, $ad_query);  
        }
        else{
        $ad_query = "insert into advertisement (post_id, ad_type, file_desc) values ($p_id, '$ad_type', '$upload')";
        mysqli_query($con, $ad_query);  
        }
    mysqli_query($con, $ad_query);
    $count = mysqli_affected_rows($con);
    return $count;
}
function insertArticle($p_id, $title, $desc, $auth)
{
    global $con;
    $art_query = "insert into article (post_id, title, description, author_name) values ($p_id, '$title', '$desc', '$auth')";
    mysqli_query($con, $art_query);
    $count = mysqli_affected_rows($con);
    return $count;
}
