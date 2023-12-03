<?php 

    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");
    $search=$_POST['search'];
    $sel=mysql_query("select * from products where product_name like '%".$search."%' or watt like '%".$search."%'");
    $st="";
    while($ans=mysql_fetch_array($sel))
    {
        echo "<div class='col'>";
        echo "<div class='card'>";
        echo "<img src='images/all image/".$ans[6]."' class='card-img-top' alt='solar images'>";
        echo "<div class='card-body'>";
        echo "<h5 class='card-title'>".$ans[1]."</h5>";
        echo "<p class='card-text'>Price : ".$ans[2]."</p>";
        echo "<p class='card-text'>Watt : ".$ans[3]."</p>";
        echo "<p class='card-text'>Company : ".$ans[4]."</p>";
        echo "</div>";
        echo "</div>";
        echo "</div>";
    }
     echo $st;
?>
