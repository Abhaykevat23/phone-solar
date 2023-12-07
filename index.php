<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Online Solar Selling</title>
    <link rel="icon" type="image/x-icon" href="images/logo.jpg">
    <link href="external files/bootstrap.min.css" rel="stylesheet">
    <script src="external files/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="style-home1.css">
    <script src="https://kit.fontawesome.com/3ff1bb1d6e.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" media="screen and (max-width:600px)" href="style-home-mobile.css">
    <script src="external files/j.min.js"></script>
</head>
<script>
    var i = 0;

var images = [];

var time = 3000;

images[0] = 'images/AD image/ad1.jpg';
images[1] = 'images/AD image/ad2.jpg';
images[2] = 'images/AD image/ad3.jpg';
// images[3] = '4.jpg';
// images[4] = '5.jpg';

var l = images.length;


function changeImg() {
    document.slide.src = images[i];

    if (i < l - 1) {
        i++
    }
    else {
        i = 0;
    }

}
setInterval("changeImg()", time);

window.onload = changeImg;
</script>
<style>
    #loading{
        position:fixed;
        width:100%;
        height:100vh;
        background:#fff url('images/loading.svg') no-repeat
        center;
        z-index:1;
    }
</style>

<script>  
$(document).ready(function(){

    $(".search-box").keyup(function(){
        // alert("hey");
        var a=f1.t1.value;
        $.ajax({
            url:"search_solar.php",
            type:"POST",
            data:{search:a},
            success:function(data){
                $(".row").html(data);
                // alert($(".row").html(data));
            }
        });
    });

    $(".filter-btn").click(function(){
        $.ajax({
            url:"filter.php",
            type:"POST",
            data:{filter:val},
            success:function(data){
                // alert(data);
                $(".row").html(data);
            }
        });
    });
    
    

    <?php
    if(isset($_SESSION['user']))
    { ?>
        
        $(".login-btn").hide();
        $(".user").show();
        $(".logout-btn").show();
    <?php 
    }
    else{ ?>
        $(".login-btn").show();
        $(".user").hide();
        $(".logout-btn").hide();
    <?php
    }
    ?>

    // down btn logic 

    // $(".down-btn").click(function(){
    //     // $(".footer").focus();
    //     alert("hii");
    // });
});
</script>


<body onload="loded()">
<div id="loading" ></div>
<!--  loading div -->
<section>

    <header class="header">
            <div class="heading">
                <h1 class="logo"><img src="images/logo.jpg" height="40px" width="40px"> <b> Bright-Star Solars</b></h1>
            </div>
            <div class="search">
                <form name="f1" method="post" >
                    <input type="search" placeholder="Search Product ...🔍 " name="t1" class="search-box" >
                    <i class="fa-solid fa-magnifying-glass" style="color: #ff0000;"></i>
                </form>
            </div>
            <div class="login">
                <button class="login-btn"><a href="login.php" class="login-a">Login</a></button>
                <p class="user" ><?php echo $_SESSION['user']; ?></p>
                <a href="login.php" class="login-a"><i class="fa-solid fa-user" style="color: #ff2929;"></i></a>
            </div>
            
            <form class="cart" method="post" action="cart.php" >
                <input type='hidden' value="<?php echo $_SESSION['email']; ?> " name='p_id' >
                <button class="cart-btn" type="submit" >Cart🛒</button>
                <i class="fa-solid fa-cart-shopping" style="color: #ff0000;"><button type="submit" ></button></i>
            </form>
            <div class="dropdown">
                <button class="btn btn-black dropdown-toggle" type="button" data-bs-toggle="dropdown"
                aria-expanded="false" id="dropdown-btn" style="color: red;font-size: 20px;" >
                    Settings
                </button>

                <i class="fa-solid fa-bars btn btn-black dropdown-toggle" style="color: #ff0505;" type="button"
                    data-bs-toggle="dropdown" aria-expanded="false"></i>

                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="profile.php">User Profile</a></li>
                    <li><a class="dropdown-item" href="admin.php">Admin panel</a></li> 
                    <!-- admin-login.php -->
                    <li><a class="dropdown-item" href="about.html">About Us</a></li>
                    <li><a class="dropdown-item" href="#">Help</a></li>
                    <li><a class="dropdown-item" href="policy.html">Policy</a></li>
                    <li class="logout-btn"><a class="dropdown-item" href="logout.php">LogOut</a></li>
                </ul>
            </div>

        </header>
    </section>
    <section class="main">
        <main class="home">
            <?php
                if(isset($_POST['pricebtn'])){
                    echo "<script> alert('price'); </script> ";
                    // sort($ans);
                }
                if(isset($_POST['qualitybtn'])){
                    echo "<script> alert('quality'); </script> "; 
                }
                if(isset($_POST['sellerbtn'])){
                    echo "<script> alert('seller'); </script> ";
                }
                if(isset($_POST['citybtn'])){
                    echo "<script> alert('city'); </script> "; 
                }
                if(isset($_POST['submit-f-s']))
                { 
                    $store=$_POST['submit-f-s'];
                    echo "<script> var val=$store; </script>"; 
                }
                ?>
            <div class="filter">
                <h3 style="color: red;margin-left: 10px;">Filters</h3>
                <form method="post">
                    <button class="filter-btn" type="submit" name="pricebtn" >Price</button>
                    <button class="filter-btn" type="submit" name="qualitybtn">Quality</button>
                    <button class="filter-btn" type="submit" name="sellerbtn">Seller</button>
                    <button class="filter-btn" type="submit" name="citybtn">City</button>
                
                    <hr style="width: 100%;color: red;">

                    <button class="filter-btn" type="submit" name="submit-f-s" value="solar" >Solar</button>
                    <button class="filter-btn" type="submit" name="submit-f-s" value="battery" >Battery</button>
                    <button class="filter-btn" style="width: 140px;">Solar Tools</button> <br>
                    <button class="filter-btn">50 Watt Solars</button>
                    <button class="filter-btn">200 Watt Solars</button>
                    <button class="filter-btn">500 Watt Solars</button>
                </form>
                <br>
                <img name="slide" class="advertisement" height=600 width=400 />
            </div>
            <div class="product">
                <div class="row cols-md-3">
                    <?php
                        $con=mysql_connect("localhost","root","");
                        mysql_select_db("solar");
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
        </main>
    </section>
    
    <?php
        include_once("footer.php");
    ?>
    <script>
        var preload=document.getElementById('loading');
        function loded(){
            preload.style.display='none';
        }
    </script>
</body>

</html>