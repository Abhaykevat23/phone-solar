<?php 
// if(isset($_SESSION['user']))
// {
    $con=mysql_connect("localhost","root","");
    mysql_select_db("solar");
    $sel=mysql_query("select * from products ");
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
// }
?>
<style>
    html{
        background-color:whitesmoke;
    }
    
    .image{
        border-radius:10px;
    }
    .winput{
        font-size:20px;
        background:transparent;
        border:none;
        
    }
    .h1{
        margin-left:45%;
        font-size:40px;
    }
    .price{
        color:red;
    }
    .ms{
        display:flex;
        /* justify-content:center; */
        border:5px solid white;
        font-size:25px;
        background-color:lightblue;
        border-radius:20px;
    }   
    .is{
        margin-left:30px;
        margin-top:35px;
        
    }
    .ds{
        margin-left:40px;
        
    }
    .button:hover{
        background-color:yellowgreen;
    }
    .button{
        font-size:20px;
        margin-bottom:10px;
        border-radius:10px;
        background-color:yellow;
        font-weight:600;
    }
</style>