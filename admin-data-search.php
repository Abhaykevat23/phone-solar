<?php 
    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");
    $search=$_POST['search'];
    $sel=mysql_query("select * from products where product_name like '%".$search."%' or watt like '%".$search."%'");
    $st="";
    while($ans=mysql_fetch_array($sel))
    {
        echo "<tr>";
        echo "<th>".$data[id]."</th>";
        echo "<td>".$data[product_name]."</td>";
        echo "<td>".$data[price]."</td>";
        echo "<td>".$data[watt]."</td>";
        echo "<td>".$data[category]."</td>";
        echo "<td>".$data[company_name]."</td>";
        echo "<td><a class='btn btn-primary' > Edit </a> &nbsp;&nbsp; <button class='btn btn-danger' > Delete </button> </td>";
        echo "</tr>";
    }
    echo $st;
?>