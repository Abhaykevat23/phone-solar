<?php
ob_start();

if (isset($_POST['addValueButton'])) {
    $wordsArray = explode(",", $_COOKIE['your_cookie_name']);

    foreach ($wordsArray as $word) {
        echo $word . "<br>";
    }
    if($word==$_POST['value']){
        echo "<script> alert('product already exist.'); </script>";
    }
    else{
        $existingCookieValue = isset($_COOKIE['your_cookie_name']) ? $_COOKIE['your_cookie_name'] : '';
        
        $newValue = $_POST['value'];
        
        $combinedValue = $existingCookieValue . "," . $newValue;
        
        setcookie('your_cookie_name', $combinedValue, time() + 3600, '/');
        ob_end_flush(); 
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Value to Cookie</title>
</head>
<body>
    <h1>Add Value to Cookie</h1>
    <form method="post">
        <input type='text' placeholder='enter name' name='value'>
        <input type="submit" name="addValueButton" value="Add Value to Cookie">
    </form>
</body>
</html>
