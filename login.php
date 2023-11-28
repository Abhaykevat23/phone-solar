<?php
session_start();

if(isset($_POST['submit']))
{
    $mail=$_POST['mail'];
    $pass=$_POST['password'];
    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");

    $sel=mysql_query("select * from login where email='".$mail."' and password='".$pass."'");

    if($data=mysql_fetch_array($sel))
    {
        header("location:index.php"); 
        $_SESSION['email'] = $data['3'];
        $_SESSION['user'] = $data['0'];
        // echo "<script> alert('".$_SESSION['user']."'); </script> ";
        //---------------redirect logic -------------
        if($_GET['link'] == "view-product"){
            $p_id=$_GET['p_id'];
            header("location:view-product.php?p_id=".$p_id);
        } 
    }
    else{
       echo "<script> alert('User Not Found '); </script>";
    }


    // if($mail=="admin@gmail.com" && $pass=="1" )
    // {
    //     header("location:temp-admin.php"); 
    //     $_SESSION['admin'] = "AdminOfS&R";
    //     // echo "<script> alert('".$_SESSION['user']."'); </script> ";    
    // }
}
?>

<html>
<link rel="icon" type="image/x-icon" href="images/logo.jpg">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">

<style>
body{
    background:url('images/animated/2.jpg');
    background-size:cover;
    margin:0px;
    padding:0px;
    font-family: 'Young Serif', serif;
}
.main-span{
    display:flex;
    margin-left:100px;
}
.quotes{
    font-size:80px;
    margin-top:100px;
}
.login-table {
    background: transparent;
    background: rgba(0, 0, 0, 0.2);
    margin-left:70px;
    border: 2px solid black;
    border-radius: 20px;
    box-shadow: 0px 0px 24px black;
    margin-top: 50px;
    padding: 10px;
    
}
.input {
    font-size: 30px;
    border-radius: 10px;
    margin-top: 10px;
    opacity: 0.8;
    font-family: 'Young Serif', serif;
}
.input::placeholder {
    font-weight: 700;
    color: black;
}
.btn {
    font-size: 28px;
    border-radius: 10px;
    margin-top: 10px;
    background:transparent ;
    color:white;
    background: rgba(0, 0, 0, 0.7);
    transition: .5s;
    padding:9px;
    width:300px;
    font-family: 'Young Serif', serif;
}
.btn:hover{
    transform: scale(1.1);
    background:transparent;
    background: rgba(0, 0, 0, 0.9);
}
.h1 {
    font-size: 50px;
    color: black;
    font-family: 'Young Serif', serif;
}
.link{
    color: black;
    font-size:19px;
}
a {
    color: blue;
}
.link a:hover {
    /* color: black; */
    background:white;
}
.home-btn{
    background:transparent;
    font-weight:600;
    padding:7px;
    font-size:20px;
    border-radius:10px;
    border:1px solid black;
    margin-left:200px;
    transition: .5s;
}
.home-btn:hover{
    transform: scale(1.3);
}
.home-btn a{
    text-decoration:none;
    color:black;
}
/* ----------------------------------------------------------------------------- */

</style>

<body>
    <?php //include('header.php'); ?>
    <span class="main-span">
        <div class="quotes">
            Solar energy <br> is bound to be<br> in our future.<br><button class="home-btn" ><a href="index.php"> Home </a></button>
        </div>
        <div class="form">
            <form method="post" spellcheck='false' >
                <table class="login-table" align="center" cellpadding="20">
                    <tr>
                        <td align="center">
                            <h1 class="h1"><b>LOG-IN</b></h1>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="email" name="mail" class="input" placeholder="E-MAIL"></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" class="input" placeholder="PASSWORD"></td>
                    </tr>
                    <tr>
                        <td align="center" class="link">Don't have an account -: <a href="signup.php"> SIGN-UP</a></td><br>
                    </tr>
                    <tr>
                        <td align="center" class="link">Retrive Password -:<a href="forgot-pass.php"> Forgot Password !</a></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="Log-In" class="btn"></td>
                    </tr>
                </table>
            </form>
        </div>
    </span>
</body>

</html>