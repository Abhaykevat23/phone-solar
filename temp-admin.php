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

if(isset($_POST['submit']))
{
    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");

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

?>
<html>
    <style>
        input{
            font-size:30px;
        }
    </style>

<div class="container">
<h1>Admin Panel</h1>
<form method="post" >
    <table cellpadding="10" cellspacing="10" >
        <tr><td><input type="text" name="p_name" placeholder="name" ></td></tr>
        <tr><td><input type="text" name="p_company" placeholder="company"  ></td></tr>
        <tr><td><input type="text" name="watt"  placeholder="watt" ></td></tr>
        <tr><td><input type="number" name="price"  placeholder="price" ></td></tr>
        <tr><td><select name="type">
                    <option value="solar">Solar</option>
                    <option value="battery">Battery</option>
                    <option value="parts">Parts</option>
                </select></td></tr>
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

<div>
    
</div>
</div>
</html>