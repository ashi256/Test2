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
         require 'common.php';
         include 'header.php';
        
         $sum=0;
         $id='';
         $user_id = $_SESSION['user_id'];
         $select_query = "SELECT items.price AS price,items.id,items.name AS name FROM users_items JOIN items ON users_items.item_id = items.id WHERE users_items.user_id = '$user_id' AND status= 'Added to cart'";
         $select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
   
         
         
         if(mysqli_num_rows($select_query_result) >= 1){?>
        <div class="container content">
            <div class="row row_style"> 
            <table class="table table-striped">
                <thead>
                <tr>
                    <th> Item Number</th>
                    <th> Item Name</th>
                    <th> Price</th>
                    <th></th>  
                </tr>
                </thead>
                <tbody>
            <?php
            while($row = mysqli_fetch_array($select_query_result)) 
            {
                $sum += $row['price'];
                $id.= $row['id'].",";
                echo "<tr><td>" . "#" .$row["id"] ."</td><td>" .$row["name"]."</td><td>Rs" .$row["price"]."</td><td><a href='Cart-remove.php?id={$row['id']}'class='remove_item_link'> Remove</a></td></tr>";}
                $id = rtrim($id,",");
                echo"<tr><td></td><td> Total</td><td>Rs".$sum."</td><td><a href='Success.php?item_id=".$id ."'class='btn btn-primary'>Confirm Order</a></td></tr>";
                ?> </tbody>
                 <?php
             }else
          { echo "Add items to the cart first!";}
            
          ?>   
                    
                                
         </table>
        </div>
         </div>
        <?php          include 'footerp.php';?>
     </body>
</html>
