<?php
if(isset($_POST['submit']))
{
    $fname=$_POST['fname'];
    $lname=$_POST['lname'];
    $mobile=$_POST['mobile'];
    $mail=$_POST['mail'];
    $pass=$_POST['password'];

    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");
    // echo "<script> alert('fname'); </script>";
    $sel=mysql_query("insert into login values('".$fname."','".$lname."','".$mobile."','".$mail."','".$pass."')");
    header("location:login.php");
}

?>
<html>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
<style>
body{
    /* background-color: gray; */
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
.signup-table {
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
    margin-top: 9px;
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
    color: white;
    font-size:19px;
}
a {
    color: blue;
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
/* ------------------------------- */

</style>

<body>

    <span class="main-span">
        <div class="quotes">
            Solar energy <br> is bound to be<br> in our future.<br><button class="home-btn" ><a href="index.php"> Home </a></button>
        </div>
        <div class="form">
            <form method="post" spellcheck='false' >
                <table class="signup-table" align="center" cellpadding="9">
                    <tr>
                        <td align="center">
                            <h1 class="h1">SIGN-UP</h1>
                        </td>
                    </tr>
                    <tr>
                        <td><input type="text" name="fname" class="input" placeholder="FIRST NAME"></td>
                    </tr>
                    <tr>
                        <td><input type="text" name="lname" class="input" placeholder="LAST NAME"></td>
                    </tr>
                    <tr>
                        <td><input type="number" name="mobile" class="input" placeholder="MOBILE NUMBER"></td>
                    </tr>
                    <tr>
                        <td><input type="email" name="mail" class="input" placeholder="E-MAIL"></td>
                    </tr>
                    <tr>
                        <td><input type="password" name="password" class="input" placeholder="PASSWORD"></td>
                    </tr>
                    <tr>
                        <td align="center" class="link">I already have an account -:<a href="login.php">LOG-IN</a></td>
                    </tr>
                    <tr>
                        <td colspan="2" align="center"><input type="submit" name="submit" value="REGISTER" class="btn"></td>
                    </tr>
                </table>
            </form>
        </div>
    </span>
</body>

</html>