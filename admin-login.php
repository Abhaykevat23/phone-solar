<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("solar");

if(isset($_POST['submit'])){

  $email=$_POST['email'];
  $pass=$_POST['password'];

  $sel=mysql_query("select * from admin");
  $val=mysql_fetch_array($sel);
  // echo "<script> alert('".$val[2]."'); </script> ";
  if($email==$val[1] && $pass==$val[2])
  {
    header("location:admin.php"); 
  }
  else{
    echo "<script> alert(' Incorrect Username Or Password . '); </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Admin Login</title>
  <link rel="stylesheet" href="admin-login-style.css">
</head>

<body>
  <div id="bg"></div>
  <form method="post" action="admin-login.php">
    <div class="form-field">
      <input type="email" placeholder="Email / Username" required name="email" />
    </div>

    <div class="form-field">
      <input type="password" placeholder="Password" required name="password" />
    </div>

    <div class="form-field">
      <button class="btn" type="submit" name="submit" >Log in</button>
    </div>
  </form>
</body>

</html>