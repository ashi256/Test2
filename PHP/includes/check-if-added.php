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
        
        function  check_if_added_to_cart($item_id)
        {
            include 'common.php';
            $user_id = $_SESSION['user_id'];
            $already_added_or_not = "SELECT * FROM users_items WHERE item_id='$item_id' AND user_id ='$user_id' and status='Added to cart'";
            $already_added_or_not_result = mysqli_query($con, $already_added_or_not) or die(mysqli_error($con));
            if(mysqli_num_rows($already_added_or_not_result) >= 1)
            {
                return 1;
            }
            else
            {
                return 0;
            }
        }
        ?>
    </body>
</html>
