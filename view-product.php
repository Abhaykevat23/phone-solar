<?php 
    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");
    $p_id=$_GET['p_id'];
    $sel=mysql_query("select * from products where id=".$p_id );
    $data=mysql_fetch_array($sel);

    //detail code
    $ans=unserialize($data[5]);
    $ans2=unserialize($data[13]);
    // echo ans[0]; 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Solar Selling</title>
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
    <link rel="stylesheet" href="style-vp1.css">
    
</head>

<script src="external files/j.min.js"></script>
<script src="zoom-vp.js"></script>
<script>
    function showhide() {
        if (document.getElementById('detail-table').style.display == 'none') {
          document.getElementById('detail-table').style.display = 'block';
          document.getElementById('feature-table').style.display = 'none';
        }
        else {
          document.getElementById('detail-table').style.display = 'none';
          document.getElementById('feature-table').style.display = 'block';
        }
    }
</script>
<script>
$(document).ready(function(){
    magnify("myimage", 2);

    $(".img0").click(function(){
        $("#myimage").attr("src","images/all image/<?php echo $data[6]; ?>");
        $(".img-magnifier-glass").hide();
        magnify("myimage", 2);
    });
    $(".img1").click(function(){
        $("#myimage").attr("src","images/all image/<?php echo $data[7]; ?>");
        $(".img-magnifier-glass").hide();
        magnify("myimage", 2);
    });

    $(".img2").click(function(){
        $("#myimage").attr("src","images/all image/<?php echo $data[8]; ?>");
        $(".img-magnifier-glass").hide();
        magnify("myimage", 2);
        $(".img-magnifier-glass").css("border","3px solid white");
    });
    $(".img3").click(function(){
        $("#myimage").attr("src","images/all image/<?php echo $data[9]; ?>");
        $(".img-magnifier-glass").hide();
        magnify("myimage", 2);
        $(".img-magnifier-glass").css("border","3px solid white");
    });
    $(".img4").click(function(){
        $("#myimage").attr("src","images/all image/<?php echo $data[10]; ?>");
        $(".img-magnifier-glass").hide();
        magnify("myimage", 2);
    });



    // now specification and features


});
</script>

<!-- --------------------------------------------------------------- -->

    <body onload="loded()">
        <div id="loading" ></div>

        <header class="header">
            <div class="heading">
                <h1 class="logo"><img src="images/logo.jpg" height="40px" width="40px"> <b> S&R Solars</b></h1>
            </div>
            <div class="cart">
                <button class="cart-btn"><a href="index.php" class="home-a">home</a></button>
            </div>
        </header>

        <div class="wrapper">
            <div class="image-div">
                <div class="multi-image">
                    <div class="mini-image" ><img src="images/all image/<?php echo $data[6]; ?>" height="80" width="80" class="img0" ></div>
                    <div class="mini-image" ><img src="images/all image/<?php echo $data[7]; ?>" height="80" width="80" class="img1" ></div>
                    <div class="mini-image" ><img src="images/all image/<?php echo $data[8]; ?>" height="80" width="80" class="img2" ></div>
                    <div class="mini-image" ><img src="images/all image/<?php echo $data[9]; ?>" height="80" width="80" class="img3" ></div>
                    <div class="mini-image" ><img src="images/all image/<?php echo $data[10]; ?>" height="80" width="80" class="img4" ></div>
                </div>
                <!-- view-image -->
                <div class="img-magnifier-container">
                    <img src="images/all image/<?php echo $data[6]; ?>" height="550" width="550" id="myimage" style="border-radius:20px" >
                </div>
            </div>
            <div class="detail-div">
                <div class="name-add-btn-desc">
                    <div class="name"><?php echo $data[1]; ?></div> 
                    <br>
                    <div style="display:flex">
                        <div class="description"> <?php echo $data[12]; ?> </div>
                        <form action="add to cart.php" method="get" >
                            <div class="price">Price : <?php echo $data[2]; ?> /-</div>
                            <input type="hidden" value="<?php echo $data[0]; ?>" name="p_id" >
                            <button type="submit" class="add-cart-btn">Add To Cart🛒</button>
                        </form>
                    </div>

                </div>
                <div class="details">
                    <div>
                        <!-- <button class="detail-btn">SPECIFICATION</button>
                        <button class="feature-btn">FEATURES</button> -->
                        <label class="toggle"  >
                            <input type="checkbox" onclick="showhide()">
                            <span class="slider"></span>
                            <span class="labels" data-on="SPECIFICATION" data-off="FEATURES"></span>
                        </label>
                    </div>
                    <table id="detail-table" cellspacing="10" >
                        <tr><td>Name : </td><td><?php echo $data[1]; ?></td></tr>
                        <tr><td>Maximum Power : </td><td><?php echo $ans[0];  ?></td></tr>
                        <tr><td>Open Circuit valtage : </td><td><?php echo $ans[1]; ?></td></tr>
                        <tr><td>Short Circuit Current : </td><td><?php echo $ans[2];  ?></td></tr>
                        <tr><td>Valtage At Max power : </td><td><?php echo $ans[3];  ?></td></tr>
                        <tr><td>Current At Max Power : </td><td><?php echo $ans[4];  ?></td></tr>
                        <tr><td>Max System Voltage : </td><td><?php echo $ans[5];  ?></td></tr>
                        <tr><td>Number Of Cells Per Module : </td><td><?php echo $ans[6];  ?></td></tr>
                        <tr><td>Product Dimentions : </td><td><?php echo $ans[7];  ?></td></tr>
                        <tr><td>Country : </td><td><?php echo $ans[8];  ?></td></tr>
                        <tr><td>Warrenty : </td><td><?php echo $ans[9];  ?></td></tr>
                    </table>
                    <table id="feature-table" style="display:none" cellspacing="10" cellpadding="10">
                        <tr><td><?php echo $ans2[0];  ?></td></tr>
                        <tr><td><?php echo $ans2[1];  ?></td></tr>
                        <tr><td><?php echo $ans2[2];  ?></td></tr>
                        <tr><td><?php echo $ans2[3];  ?></td></tr>
                        <tr><td><?php echo $ans2[4];  ?></td></tr>
                    </table>
                </div>
                <div class="highlite">
                    <img src="images/BATTERY/B1.jpg" class="highlite-img" >
                    <img src="images/BATTERY/B2.jpg" class="highlite-img" >
                    <img src="images/BATTERY/B3.jpg" class="highlite-img" >
                    <img src="images/BATTERY/B4.jpg" class="highlite-img" >
                    <img src="images/BATTERY/B6.jpg" class="highlite-img" >
                </div>
                <div class="suggestion">
                    <h2>You may also like this...</h2>

                    <div class="row">
                    <?php
                        $sel=mysql_query("select * from products");
                        while($ans=mysql_fetch_array($sel)){
                            echo "<form class='col' method='get' action='view-product.php' >";
                            echo "<button class='card' type='submit' >";
                            echo "<img src='images/all image/".$ans[6]."' class='card-img-top' alt='solar images'>";
                            echo "<div class='card-body'>";
                            echo "<input type='hidden' value=".$ans[0]." name='p_id' >";
                            echo "<h5 class='card-title'>".$ans[1]."</h5>";
                            echo "<p class='card-text'>Price : ".$ans[2]."</p>";
                            echo "<p class='card-text'>Watt : ".$ans[3]."</p>";
                            echo "<p class='card-text'>Company : ".$ans[4]."</p>";
                            echo "</div>";
                            echo "</button>";
                            echo "</form>";
                        }
                    ?>
                    </div>
                </div>
            </div>
        </div>

        <script>
            var preload=document.getElementById('loading');
            function loded(){
                preload.style.display='none';
            }
        </script>
    </body>



    <?php  include('footer.php'); ?>
</html>