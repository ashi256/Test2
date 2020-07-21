<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'common.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link href="styleforphp.css" rel="stylesheet" type="text/css"/>  
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        if (!(isset($_SESSION['email']))) {
        header('location: index1.php');}
            $item_id = $_GET['item_id'];
            $user_id = $_SESSION['user_id'];
           $update_query = "UPDATE users_items SET status = 'Confirmed' WHERE user_id= " . $user_id . " AND item_id IN (" . $item_id . ") AND status = 'Added to cart' ";
           $update_query_result = mysqli_query($con, $update_query) or die(mysqli_error($con));

        ?>
         <div class="container content">
        <div class="row row_style">
        
            <div class="text-center" >Your order is confirmed. Thank you for shopping with us.</div><br> 
            <div style="border-bottom: 1px solid lightgrey;"> </div> <br>
            <div class="text-center"><a href="products.php" style="color:blue;"> Click here</a> to purchase any other item.</div>
            
         </div>
        </div>
    </body>
</html>
