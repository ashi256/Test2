<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
require 'common.php';
 if (isset($_SESSION['id'])) {
  echo "Hello ".$_SESSION['email'];
} else {
  echo "Hello Guest";
}
include 'header.php';
?>
<html>
    <head>
        <title>User Registration form</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link href="styleforphp.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
           
            .top_margin{
                margin-top:50px;
                margin-bottom: 0px;
            }
        </style>
       
    </head>
</head>

<body>
    <div class="container">
        <div class="row top_margin">
            <div class="col-xs-6 col-xs-offset-3">
                <div class="panel panel-primary">
                    <div class="panel-heading"><h1> SIGN UP</h1></div>
                    <div class="panel-body">
                        <form method="POST" action="SignUp_script.php">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" class="form-control" id="email" name="email" required = "true">
                                <!-- <div><?php //echo $_GET['email_error']; ?></div>-->
                            </div>
                            
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required = "true" pattern=".{6,}">
                               <!-- <div><?php //echo $_GET['password_error']; ?></div>-->
                            </div>
                            <div class="form-group">
                                <label for="contact">Contact</label>
                                <input type="number" class="form-control" id="contact" name="contact">
                            </div>
                             <div class="form-group">
                                <label for="city">City</label>
                                <input type="Text" class="form-control" id="city" name="city">
                            </div>
                             <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" class="form-control" id="address" name="address">
                            </div>
                            <button type="submit" class="btn btn-primary" value=”registration_submit”>Submit</button>
                        </form>
                    </div>
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