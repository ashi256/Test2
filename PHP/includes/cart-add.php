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
    </head>
    <body>
        <?php
        $item_id = $_GET['item_id'];
        $user_id = $_SESSION['user_id'];
        $insert_into_cart = "INSERT INTO users_items(user_id, item_id, status) VALUES('$user_id', '$item_id', 'Added to cart')";
        $insert_into_cart_submit = mysqli_query($con, $insert_into_cart) or die(mysqli_error($con));
        header('location:products.php');
        ?>
    </body>
</html>
<?php
        // put your code here
        include 'footerp.php';
        ?>