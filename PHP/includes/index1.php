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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <link href="styleforphp.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <?php
        // put your code here
        if (isset($_SESSION['email'])) {
         header('location: products.php');
          }
        include 'header.php';
        ?>
         <div class = "banner_image">
                      <div class ="container content">
                          <center>  <div id="banner_content">
                      <a href="products.php" class="btn btn-danger btn-lg active"> Shop Now</a>
                              </div></center>
                          </div>
                 </div>	
    </body>
</html>
<?php
        // put your code here
        include 'footerp.php';
        ?>