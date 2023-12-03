<?php 
    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");
    $search=$_POST['search'];
    $sel=mysql_query("select * from products where product_name like '%".$search."%' or watt like '%".$search."%' or company_name like '%".$search."%'");
    $st="";
    while($ans=mysql_fetch_array($sel))
    {
        echo "<tr>";
        echo "<th>".$ans[0]."</th>";
        echo "<td>".$ans[1]."</td>";
        echo "<td>".$ans[2]."</td>";
        echo "<td>".$ans[3]."</td>";
        echo "<td>".$ans[11]."</td>";
        echo "<td>".$ans[4]."</td>";
        echo "<td><a class='btn btn-primary' href='./edit.php?p_id=$ans[0]' > Edit </a> &nbsp;&nbsp; <button class='btn btn-danger' > Delete </button> </td>";
        echo "</tr>";
    }
    echo $st;
?>