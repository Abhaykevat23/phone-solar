<?php
session_start();
error_reporting(0);//hide warning
?>
        <!-- ================================================================== -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Add To Cart</title>
    <link rel="stylesheet" href="cart-style.css">
    <!-- <link rel="stylesheet" href="external files\font-awesome.min.css"> -->
  </head>
  <body>
    <?php include('header.php'); ?>
    <div class="wrapper">
    <div class="flex-div">
    
<?php

if(isset($_SESSION['user']))
{
  $con=mysql_connect("localhost","root","");
  mysql_select_db("solar");
  $p_id=$_GET['p_id'];
  
  // -------------------------fetch cart code---------
  
  if(isset($_COOKIE['cart'])){
    $wordsArray = explode(",", $_COOKIE['cart']);
    $price=0;
    foreach ($wordsArray as $word) {
      $sel=mysql_query("select product_name,price,watt,p_img,category from products where id=".$word);
      while ($data=mysql_fetch_array($sel)) {
        ?>

        <!-- ============================================= -->
          
            <div class="list">
              <img src="images/all image/<?php echo $data[3]; ?>" alt="product_img" height="150" width="150">
                <div style="margin-left:20px;">
                  Name : <?php echo $data[0]; ?><br>
                  Price : <?php echo $data[1]; ?><br>
                  Watt : <?php echo $data[2]; ?><br>
                  Category : <?php echo $data[4]; ?><br>
                </div>
            </div>
        
        <?php
        $price=$price + $data[1];
      }
    } 
        ?>
      <!-- ====================================================== -->
    </div>
        <div class="total"> 
          <?php
            echo "Total Amount : ". $price;
          ?>
        </div>
    </div>

    <?php
  }
  else{
    ?>
    <!-- ========================================================= -->
    <h1>No Product Added . . .</h1>
    
    <?php
  }
}
else{
    ?>
    <!-- ========================================================= -->
    <div class="container">
      <h1>Oops!</h1>
      <p>First Login Please So You Can See Your Products..</p>
      <a href="login.php">Login Page</a>
    </div>
  
<?php
}
?>
    
</body>
</html>