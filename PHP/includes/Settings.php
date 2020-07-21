<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
        // put your code here
        include 'common.php';
        ?>

<html>
    <head>
        <title>Setting Page</title>
        <link href="styleforphp.css" rel="stylesheet" type="text/css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <style>
           
            .top_margin{
                margin-top:50px;
                margin-bottom:120px;
            }
        </style>
    </head>
    
    <body>
         <?php
        // put your code here
          if (!(isset($_SESSION['email']))) 
          {
          header('location: index1.php');
          
          }
        include 'header.php';
        
        ?>

        <div class ="container">
                
            <div class="row row_style">
                <div class="col-xs-6">
                    <div class="panel">
                        <div class="panel-heading">
                            <h1><b> Change Password </b></h1>  
                        </div>
                         <div class="panel-body">
            
                               <form method="POST" action="setting_script.php">
                                <div class="form-group">
                                     <label for="Old Password">Old Password</label>
                                     <input type="password" class="form-control input-lg" name="Oldpassword" placeholder="Old Password" required = "true" pattern=".{6,}">
                                    
                                </div>
                <div class="form-group">
                     <label for="New Password">New Password</label>
                    <input type="password" class="form-control input-lg" name="Newpassword" placeholder="New Passwod" required = "true" pattern=".{6,}">
                    
                                </div>
                <div class="form-group">
                    <label for="Retype Password">Retype Password</label>
                    <input type="password" class="form-control input-lg" name="Retypepassword" placeholder="Retype Password" required = "true" pattern=".{6,}">
                    
                                </div>
                <div><?php 
                                   
                             if(isset($_GET['message']))
                             {
                                 echo $_GET['message'];
                             }
                             
                               ?></div>
                             <button type="submit" class="btn btn-primary" value=”Password_Updated”> Change</button>
                                </form>
                             
        </div>
                        </div>
                </div>
            </div>            
                    </div>
       

    </body>
</html>
<?php
       
        include 'footerp.php';
?>
