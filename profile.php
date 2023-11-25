<?php
session_start();

if(isset($_SESSION['user']))
{
    // echo "<script>location.href='add_item.php'</script>";
    $user=$_SESSION['user'];
    // echo "<script> alert('".$user."'); </script> ";

    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");
    $sel=mysql_query("select * from login where fname='".$user."'");
    $data=mysql_fetch_array($sel);
}
else{
    echo "<script>location.href='login.php' </script>";
}

?>
<style>
    .form{
    margin-left: 430px;
    margin-top: 10px;
}
h1{
    margin-top: 70px;
    text-align: center;
}
.col-md-6{
    margin-top: 20px;
}
.container{
    margin-top:40px;
}
.btn-div{
    margin-left:150px;
    margin-top:30px;
}
</style>
<link href="external files/bootstrap.min.css" rel="stylesheet">
<script src="external files/bootstrap.bundle.min.js"></script>
<div class="container">
    <h1> Your Profile </h1>
    <form class="form" method="post">
        <div class="col-md-6"><input type="text" class="form-control" value="<?php echo $data['0']; ?>" ></div>
        <div class="col-md-6"><input type="text" class="form-control" name="mobile" value="<?php echo $data['2']; ?>">
        </div>
        <div class="col-md-6"><input type="text" class="form-control" name="email" value="<?php echo $data['3']; ?>" readonly ></div>
        <div class="col-md-6"><input type="text" class="form-control" name="password" value="<?php echo $data['4']; ?>"></div>
        <div class="btn-div"><button class="btn btn-primary" type="submit" name="submit" >Save Profile</button>
        </div>
    </form>
</div>
<!-- echo " "; echo $data['1']; -->
<?php
if(isset($_POST['submit'])){
    $mobile=$_POST['mobile'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $save=mysql_query("update login set mobile='".$mobile."',password='".$password."' where email='".$email."' ");
    echo "<script> alert('Profile Saved !'); </script> "; 
    echo "<script>location.href='index.php'</script>";

}
?>