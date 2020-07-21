<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

require 'common.php';
$email = $_POST['email'];
$password = $_POST['password'];


$select_query = "SELECT id, email FROM users WHERE email='$email' AND password='$password'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
//signify that user already exist
$row=mysqli_num_rows($select_query_result);
if($row==0)
{
echo "fill up the sign Up form";
header('location:SignUp.php');
}

else
{
    echo "logged in";
   $row = mysqli_fetch_array($select_query_result);
   $_SESSION['email'] = $row['email'];
   $_SESSION['user_id'] = $row['id'];
   header('location: products.php');
}

?>
    </body>
</html>
