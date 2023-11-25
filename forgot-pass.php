<?php
if(isset($_POST['submit'])){
    
    $user=$_POST['email'];
    $check1=stripos($user,"@");
    $check2=stripos($user,".");
    if($check1 > 2 && $check1 < $check2-1 )
    {
        $con=mysql_connect("localhost","root","");
        mysql_select_db("solar");
        $sel=mysql_query("select * from login where email='".$user."'");
        
        if($data=mysql_fetch_array($sel))
        {
            $to = $user;
            $subject = "Bright-Star Solars";
            $message = "Your Password is :".$data['password'] ;
            $header = "From:abhaykevat23@gmail.com \r\n";
            $retval = mail ($to,$subject,$message,$header);
            
            if( $retval == true ) {
               echo "<script> alert('Password sent successfully On your given E-mail...') </script>";
            }else {
               echo "<script> alert('Password could not be sent...') </script>";
            }
            echo "<script>location.href='login.php'</script>";
        }
        else{
            echo "<script> alert('E-mail Not Found , Please Confirm That You Sign-up ?') </script>";
        } 
    }
    else{
        echo "<script> alert('invalid E-mail') </script>";
    }

    
    
}

?>
<html>
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
        <h1> Retrive Password </h1>
        <form class="form" method="post">
            <div class="col-md-6">
                <input type="text" class="form-control" name="email" required >
            </div>
            <div class="btn-div">
                <button class="btn btn-primary" type="submit" name="submit" >Retrive Password</button>
            </div>
        </form>
    </div>
</html>