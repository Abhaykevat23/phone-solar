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
    <style>
        input{
            font-size:30px;
        }
        body {
          margin: 0;
          font-family: Arial, Helvetica, sans-serif;
          /* background-color:gray; */
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
    </style>

    <script>
      $(document).ready(function(){
        $(".home-div").show();
        $(".update-div").hide();
        $(".delete-div").hide();
        $(".insert-div").hide();
        $(".setting-div").hide();

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
      <form method="post" >
        <h1>Admin Panel</h1>
        <table cellpadding="10" cellspacing="10" >
          <tr><td><input type="text" name="p_name" placeholder="name" ></td></tr>
          <tr><td><input type="text" name="p_company" placeholder="company"  ></td></tr>
          <tr><td><input type="text" name="watt"  placeholder="watt" ></td></tr>
          <tr><td><input type="number" name="price"  placeholder="price" ></td></tr>
          <tr><td><select name="type">
                      <option value="solar">Solar</option>
                      <option value="battery">Battery</option>
                      <option value="parts">Parts</option>
                  </select>
              </td></tr>
          <tr><td><input type="file" name="p_img" ></td> <td><p>main</p></td></tr>
          <tr><td><input type="file" name="p_img1" ></td><td><p>second</p></td></tr>
          <tr><td><input type="file" name="p_img2" ></td><td><p>detail</p></td></tr>
          <tr><td><input type="file" name="p_img3" ></td><td><p>warrenty</p></td></tr>
          <tr><td><input type="file" name="p_img4" ></td><td><p>height</p></td></tr>
          
          <tr><td><input type="text" name="detail[]"  placeholder="165w|MAX POWER" ></td></tr> <!-- maximum power -->
          <tr><td><input type="text" name="detail[]"  placeholder="22.20v | OPEN CIR. VALTAGE" ></td></tr> <!-- open circuit valtage -->
          <tr><td><input type="text" name="detail[]"  placeholder="9.34A | SHORT CIR. CURRENT" ></td></tr> <!-- short circuit current -->
          <tr><td><input type="text" name="detail[]"  placeholder="18.20V | VALTAGE MAX POWER" ></td></tr> <!-- valtage at max power -->
          <tr><td><input type="text" name="detail[]"  placeholder="8.79A | CURRENT MAX POWER" ></td></tr> <!-- current at max power -->
          <tr><td><input type="text" name="detail[]"  placeholder="1000V DC | MAX SYSTEM VALTAGE" ></td></tr> <!-- max system valtage -->
          <tr><td><input type="text" name="detail[]"  placeholder="36 | NUM. CELLS PER MODULE" ></td></tr> <!-- number of cells per module -->
          <tr><td><input type="text" name="detail[]"  placeholder="150x67x3.6 | PRODUCT DIMENTIONS" ></td></tr> <!-- product dimentions -->
          <tr><td><input type="text" name="detail[]"  placeholder="COUNTRY" ></td></tr> <!-- country -->
          <tr><td><input type="text" name="detail[]"  placeholder="25 | WARRANTY on perfo." ></td></tr> <!-- warrenty on perfomance -->
          <tr><td><input type="text" name="detail[]"  placeholder="10 | WARRANTY on manufa." ></td></tr> <!-- warrenty on manufacturing -->
          <br>
          <tr><td><h2>------------------------------------------------------------------</h2></td></tr>
          <br>
          <tr><td><textarea row="8" col="10" name="description" placehilder="description" ></textarea></td></tr>
          <tr><td><input type="text" name="feature[]"  placeholder="Feature 1" ></td></tr>
          <tr><td><input type="text" name="feature[]"  placeholder="Feature 2" ></td></tr>
          <tr><td><input type="text" name="feature[]"  placeholder="Feature 3" ></td></tr>
          <tr><td><input type="text" name="feature[]"  placeholder="Feature 4" ></td></tr>
          <tr><td><input type="text" name="feature[]"  placeholder="Feature 5" ></td></tr>
          <tr><td><input type="submit" value="Add Product" name="submit" ></td></tr>
        </table>
      </form>
    </div>

    <div class="update-div" style="margin-top:20px;" >
      <form name="f1" action="edit.php" method="GET" >
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
                // echo "<input type='hidden' value='<?php echo $data[0]; ' name='p_id' >";
                echo "<td><a class='btn btn-primary' href='./edit.php?p_id=$ans[0]' > Edit </a> &nbsp;&nbsp; <button class='btn btn-danger' > Delete </button> </td>";
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


