<?php
session_start();
// ob_start();

if(isset($_SESSION['user']))
{
    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");
    $p_id=$_GET['p_id'];
    $user_mail=$_SESSION['email'];

    $existingCookieValue = isset($_COOKIE['cart']) ? $_COOKIE['cart'] : '';
        
    $combinedValue = $existingCookieValue . "," . $p_id;
        
    setcookie('cart', $combinedValue, time() + (3600 * 24 * 60) , '/'); // Cookie expires in 60 days
    // ob_end_flush();

    // setcookie('cart', $p_id , time() + (3600 * 24 * 60) , '/'); // Cookie expires in 60 days

    header("location:cart.php");
}
else{
    header("location:login.php?link=view-product&p_id=".$_GET['p_id']);
}
?>