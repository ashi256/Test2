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
  <div class="navbar navbar-inverse navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 </button>
 <a class="navbar-brand" href="index1.php">Lifestyle Store</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 if (isset($_SESSION['email'])) {
 ?>
 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
 <li><a href = "Settings.php"><span class = "glyphicon glyphicon-user"></span>
Settings</a></li>
 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-out"></span> Logout</a></li>
 ?>
 <?php
       } else {
 ?>
 <li><a href="SignUp.php"><span class="glyphicon glyphicon-user"></span>
Sign Up</a></li>
 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span>
Login</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
</div>

    </body>
</html>
