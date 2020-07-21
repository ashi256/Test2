<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
 require 'common.php';   
 include 'header.php';
 include 'Check-if-added.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="styleforphp.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <h1>Welcome to our Lifestyle Store!</h1>
                <p> We have the best cameras, watches and shirts for you</p>
            </div>
            <div class="row row_style">
                    <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/5.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3> Cannon EOS</h3>
                                <p> Price:Rs. 36000.00</p></center>
                            <?php if (!(isset($_SESSION['email']))) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  
                        
                       }  else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=1" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                      
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/2.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3> SONY DSLR</h3>
                                <p> Price:Rs. 40000.00</p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(2)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/3.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3>SONY DSLR</h3>
                                <p> Price:Rs. 50000.00</p></center>
                           <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=3" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/4.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3>OLYMPUS DSLR</h3>
                                <p> Price:Rs. 80000.00</p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=4" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                </div>
            <div class="row row_style">
                    <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/9.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3> Titan Model#301</h3>
                                <p> Price:Rs. 13000.00</p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=5" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/10.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3> Titan Model#201</h3>
                                <p> Price:Rs. 3000.00</p></center>
                           <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=6" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/11.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3>HMT Milan</h3>
                                <p> Price:Rs. 8000.00</p></center>
                           <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=7" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/12.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3>Faber Luba#111</h3>
                                <p> Price:Rs. 18000.00</p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=8" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                </div>
            <div class="row row_style">
                    <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail" > <img src ="images/8.jpg" alt="Responsive Image"style="height:167px;"> </a>
                        <div class="caption">
                            <center> <h3>H&W</h3>
                                <p> Price:Rs. 800.00</p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=9" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/6.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3>Luis Phil</h3>
                                <p> Price:Rs. 1000.00</p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=10" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/13.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3>John Zok</h3>
                                <p> Price:Rs. 1500.00</p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=11" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                <div class="col-md-3 col-sm-6 ">
                        <a href="#" class="thumbnail"> <img src ="images/14.jpg" alt="Responsive Image"> </a>
                        <div class="caption">
                            <center> <h3>Jhalsani</h3>
                                <p> Price:Rs. 1300.00</p></center>
                            <?php if (!isset($_SESSION['email'])) { ?>
                         <p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
                        <?php  } 
                        else {
                             //We have created a function to check whether this particular product is added to cart or not.
                           if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
                            echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';} 
                            else {
                               ?>
                            <a href="cart-add.php?item_id=12" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
                         <?php
                            }
                             }
                              ?>
                        </div>
                        
                    </div>
                </div>
        </div>
        
        
    </body>
</html>
<?php
        // put your code here
        include 'footerp.php';
        ?>