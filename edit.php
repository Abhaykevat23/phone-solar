<?php
$con=mysql_connect("localhost","root","");
mysql_select_db("solar");

$pd_id=$_GET['pd_id'];//shor this using if(isset($_get['pd_id']))
if(isset($pd_id)){
  // echo "<script> alert('".$pd_id." is ready to delete') </script>";
  mysql_query("delete from products where id=$pd_id");
  echo "<script> location.href='admin.php'; </script>";
  exit;
}
$id=$_GET['p_id'];
$sel=mysql_query("select * from products where id ='".$id."'");

$ans=mysql_fetch_array($sel);
$features=unserialize($ans[feature]);

$p_name=$_GET['p_name'];
$p_company=$_GET['p_company'];
$watt=$_GET['watt'];
$price=$_GET['price'];
$description=$_GET['description'];
$features_s=serialize($_GET['feature']);
if(isset($_GET['submit'])){
  // echo "<script> alert('".$_GET['id']."') </script>";
  $p_id=$_GET['id'];
  mysql_query("update products set product_name='".$p_name."',price=".$price.",watt='".$watt."',company_name='".$p_company."',description='".$description."',feature='".$features_s."' where id=".$p_id);
  echo "<script> location.href='admin.php'; </script>";
}

?>

<form method="GET" action="edit.php">
    <h1>Admin Panel</h1>
    <table cellpadding="10" cellspacing="10" >
      <tr><td><input type="text" name="id" value=<?php echo "$ans[id]"; ?> readonly ></td></tr>
      <tr><td><input type="text" name="p_name" placeholder="name" value=<?php echo "$ans[product_name]"; ?> ></td></tr>
      <tr><td><input type="text" name="p_company" placeholder="company"  value=<?php echo "$ans[company_name]"; ?>  ></td></tr>
      <tr><td><input type="text" name="watt"  placeholder="watt" value=<?php echo "$ans[watt]"; ?>  ></td></tr>
      <tr><td><input type="number" name="price"  placeholder="price"  value=<?php echo "$ans[price]"; ?> ></td></tr>
    
      <br>
      <tr><td><textarea row="10" col="40" name="description" placeholder="description" ><?php echo "$ans[description]"; ?></textarea></td></tr>
      <tr><td><input type="text" name="feature[]"  placeholder="Feature 1" value=<?php echo "$features[0]"; ?> ></td></tr>
      <tr><td><input type="text" name="feature[]"  placeholder="Feature 2" value=<?php echo "$features[1]"; ?> ></td></tr>
      <tr><td><input type="text" name="feature[]"  placeholder="Feature 3" value=<?php echo "$features[2]"; ?> ></td></tr>
      <tr><td><input type="text" name="feature[]"  placeholder="Feature 4" value=<?php echo "$features[3]"; ?> ></td></tr>
      <tr><td><input type="text" name="feature[]"  placeholder="Feature 5" value=<?php echo "$features[4]"; ?> ></td></tr>

      <tr><td><input type="submit" value="Update Product" name="submit" ></td></tr>
    </table>
</form>