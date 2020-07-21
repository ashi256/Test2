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
       $item_id = $_GET['id'];
       $user_id = $_SESSION['user_id'];
       $delete_query = "DELETE FROM users_items WHERE item_id = '$item_id' AND user_id = '$user_id'";
       $delete_submit = mysqli_query($con, $delete_query) or die(mysqli_error($con));
       header('location:cart.php');
        ?>
    </body>
</html>
