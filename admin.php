<?php
// session_start();
// if(!isset($_SESSION['AdminOfS&R']))
// {
//     header("location:index.php");
// }
// else{

//     if($mail=="admin@gmail.com" && $pass=="1" )
//     {
//         // header("location:temp-admin.php"); 
//         $_SESSION['admin'] = "AdminOfS&R";
//         // echo "<script> alert('".$_SESSION['user']."'); </script> ";    
//     }
// }
$con=mysql_connect("localhost","root","");
mysql_select_db("solar");

if(isset($_POST['submit']))
{
  $p_name=$_POST['p_name'];
  $p_company=$_POST['p_company'];
  $watt=$_POST['watt'];
  $price=$_POST['price'];
  $p_img=$_POST['p_img'];
  $p_img1=$_POST['p_img1'];
  $p_img2=$_POST['p_img2'];
  $p_img3=$_POST['p_img3'];
  $p_img4=$_POST['p_img4'];
  $category=$_POST['type'];
  $description=$_POST['description'];
  $details=serialize($_POST['detail']);
  $feature=serialize($_POST['feature']);
  
  $sql=mysql_query("insert into products values
  (null,'$p_name',$price,'$watt','$p_company','$details','$p_img','$p_img1','$p_img2','$p_img3','$p_img4','$category','$description','$feature')");

}

$sel=mysql_query("select id,product_name,price,watt,company_name,category from products");

?>

<!DOCTYPE html>
<html lang="en">
  <head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Panel</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="external files/j.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
  <style>
    .search{
        font-size:30px;
    }
    body {
      margin: 0;
      font-family: Arial, Helvetica, sans-serif;
      text-align: center;
      /* background-color:green; */
    }
    .home{
      background-color:green;
    }
    .topnav {
      overflow: hidden;
      background-color: #333;
    }
    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 16px;
      text-decoration: none;
      font-size: 17px;
    }
    .topnav a:hover {
      background-color: #ddd;
      color: black;
    }
    .topnav a.active {
      background-color: #04AA6D;
      color: white;
    }
    .topnav .icon {
      display: none;
    }
    @media screen and (max-width: 600px) {
      .topnav a:not(:first-child) {display: none;}
      .topnav a.icon {
        float: right;
        display: block;
      }
    }
    /* @media screen and (max-width: 600px) {
      .topnav.responsive {position: relative;}
      .topnav.responsive .icon {
        position: absolute;
        right: 0;
        top: 0;
      }
      .topnav.responsive a {
        float: none;                        --------responsive------
        display: block;
        text-align: left;
      }
    } */
    /* ==================================================================== */
    .insert-div form {
			background-color: #fff;
			max-width: 600px;
			margin: 50px auto;
			padding: 30px 20px;
			box-shadow: 2px 5px 10px rgba(0, 0, 0, 0.5);
		}

		.form-control {
			text-align: left;
			margin-bottom: 25px;
		}

		.form-control label {
			display: block;
			margin-bottom: 10px;
		}

		.form-control input,
		.form-control select,
		.form-control textarea {
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			padding: 4px;
			display: block;
			width: 95%;
		}

		/* Styling Button */
		#form button {
			background-color: #05c46b;
			border: 1px solid #777;
			border-radius: 2px;
			font-family: inherit;
			font-size: 21px;
			display: block;
			width: 100%;
			margin-top: 50px;
			margin-bottom: 20px;
		}
  </style>

  <script>
    $(document).ready(function(){
      $(".home-div").show();
      $(".update-div").hide();
      $(".delete-div").hide();
      $(".insert-div").hide();
      $(".setting-div").hide();

      swal({
            title: "User created!",
            text: "Suceess message sent!!",
            icon: "success",
            button: "Ok",
            timer: 2000
        });

        
      $(".insert").click(function(){
        $(".update-div").hide();
        $(".home-div").hide();
        $(".delete-div").hide();
        $(".insert-div").show();
        $(".setting-div").hide();
      });
      $(".home").click(function(){
        $(".update-div").hide();
        $(".home-div").show();
        $(".delete-div").hide();
        $(".insert-div").hide();
        $(".setting-div").hide();
      });
      $(".update").click(function(){
        $(".update-div").show();
        $(".home-div").hide();
        $(".delete-div").hide();
        $(".insert-div").hide();
        $(".setting-div").hide();
      });
      $(".setting").click(function(){
        $(".update-div").hide();
        $(".home-div").hide();
        $(".delete-div").hide();
        $(".insert-div").hide();
        $(".setting-div").show();
      });
      $(".search").keyup(function(){
        var a=f1.t1.value;
        $.ajax({
            url:"admin-data-search.php",
            type:"POST",
            data:{search:a},
            success:function(data){
                $(".data").html(data);
            }
        });
      });
    });
  </script>
</head>

<body>
  <div class="topnav" id="myTopnav">
    <a  class="home">Home</a>
    <a  class="insert">Add Solar</a>
    <a  class="update">Update / Delete </a>
    <a  class="setting"> Settings</a>
    <!-- <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a> -->
  </div>

  <div class="container">
      <div class="home-div">
        home
      </div>
      
    <div class="insert-div" >
    
      <form id="form" method="post">
        <h1>Add Product</h1>
      <div class="form-control">
          <label for="name" id="label-name">Name</label>
          <input type="text" id="name" placeholder="Enter Name" name="p_name" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">Company Name</label>
          <input type="text" id="name" placeholder="Enter Name" name="p_company" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">Watt</label>
          <input type="text" id="name" placeholder="Enter Name" name="watt" required />
      </div>
      <div class="form-control">
          <label for="price" id="label-price">price</label>
          <input type="number" id="price" placeholder="Enter price" name="price" required />
      </div>
      <!-- ##################################################### -->
      <div class="form-control">
          <label for="role" id="label-role">Select Product Category</label>
          <select name="type" id="role">
              <option value="solar" selected >Solar</option>
              <option value="battery">Battery</option>
              <option value="parts">Parts</option>
          </select>
      </div>
      <!-- ##################################################### -->
      <div class="form-control">
          <label for="img" id="label-img">Main Image</label>
          <input type="file" id="img" name="p_img" required />
      </div>
      <div class="form-control">
          <label for="img" id="label-img">Second Image</label>
          <input type="file" id="img" name="p_img1" required />
      </div>
      <div class="form-control">
          <label for="img" id="label-img">Detail Image</label>
          <input type="file" id="img" name="p_img2" required />
      </div>
      <div class="form-control">
          <label for="img" id="label-img">Warrenty Image</label>
          <input type="file" id="img" name="p_img3" required />
      </div>
      <div class="form-control">
          <label for="img" id="label-img">Height Image</label>
          <input type="file" id="img" name="p_img4" required />
      </div>

      <!-- ##################################################### -->

      <div class="form-control">
          <label for="name" id="label-name">MAX POWER</label>
          <input type="text" id="name" name="detail[]"  placeholder="165w" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">OPEN CIR. VALTAGE</label>
          <input type="text" id="name" name="detail[]"  placeholder="22.20v" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">SHORT CIR. CURRENT</label>
          <input type="text" id="name" name="detail[]"  placeholder="9.34A" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">VALTAGE MAX POWER</label>
          <input type="text" id="name" name="detail[]"  placeholder="18.20V" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">CURRENT MAX POWER</label>
          <input type="text" id="name" name="detail[]"  placeholder="8.79A" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">MAX SYSTEM VALTAGE</label>
          <input type="text" id="name" name="detail[]"  placeholder="1000V DC" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">NUM. CELLS PER MODULE</label>
          <input type="text" id="name" name="detail[]"  placeholder="36" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">PRODUCT DIMENTIONS</label>
          <input type="text" id="name" name="detail[]"  placeholder="150x67x3.6" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">COUNTRY</label>
          <input type="text" id="name" name="detail[]"  placeholder="COUNTRY" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">WARRANTY on perfo.</label>
          <input type="text" id="name" name="detail[]"  placeholder="25" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">WARRANTY on manufa.</label>
          <input type="text" id="name" name="detail[]"  placeholder="10" required />
      </div>
    
      <!-- ##################################################### -->
      <div class="form-control">
          <label for="name" id="label-name">Feature 1</label>
          <input type="text" id="name" name="feature[]"  placeholder="Feature 1" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">Feature 2</label>
          <input type="text" id="name" name="feature[]"  placeholder="Feature 2" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">Feature 3</label>
          <input type="text" id="name" name="feature[]"  placeholder="Feature 3" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">Feature 4</label>
          <input type="text" id="name" name="feature[]"  placeholder="Feature 4" required />
      </div>
      <div class="form-control">
          <label for="name" id="label-name">Feature 5</label>
          <input type="text" id="name" name="feature[]"  placeholder="Feature 5" required />
      </div>
      <!-- ##################################################### -->
      <div class="form-control">
          <label for="description">Product Description</label>
          <textarea  id="comment" placeholder="Enter Description here" name="description"></textarea>
      </div>

        <button type="submit" value="submit" name="submit" >Submit</button>
    </form>
    </div>

    <div class="update-div" style="margin-top:20px;" >
      <form name="f1" method="GET" >
        <table class="table table-hover" style="color:blue;font-size: 20px;">
          <thead>
            <tr><input type="search" name="t1" class="search" placeholder="Search" ></tr>
            <tr>
              <th>Sr. NO</th>
              <th>Name</th>
              <th>Price</th>
              <th>Watt</th>
              <th>Category</th>
              <th>Comapany</th>
              <th> ACTION'S</th> 
            </tr>
          </thead>
          
          <tbody class="data">
            <?php
              while($ans=mysql_fetch_array($sel)){
                echo "<tr>";
                echo "<th>".$ans[0]."</th>";
                echo "<td>".$ans[1]."</td>";
                echo "<td>".$ans[2]."</td>";
                echo "<td>".$ans[3]."</td>";
                echo "<td>".$ans[category]."</td>";
                echo "<td>".$ans[4]."</td>";
                echo "<td><a class='btn btn-primary' href='./edit.php?p_id=$ans[0]' > Edit </a> &nbsp;&nbsp; <a class='btn btn-danger' href='./edit.php?pd_id=$ans[0]' > Delete </a> </td>";
                echo "</tr>";
              }   
            ?>
          </tbody>
        </table>
      </form>

    </div>

    <div class="setting-div" >
      setting
      password in database for security
      other website settings
      investores editing
      social media links
    </div>

  </div>
  <!-- <script>
  function myFunction() {
    var x = document.getElementById("myTopnav");
    if (x.className === "topnav") {
      x.className += " responsive";
    } else {
      x.className = "topnav";
    }
  }
  </script> -->
  </body>
</html>


