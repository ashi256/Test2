<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 require 'common.php';
if (!(isset($_SESSION['email']))) {
header('location: index1.php');}
 
$email=$_SESSION['email'];

$Oldpassword = $_POST['Oldpassword'];


$Newpassword =$_POST['Newpassword'];

$Retypepassword = $_POST['Retypepassword'];
$select_query = "SELECT password FROM users where email='$email' AND password='$Oldpassword'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
$row= mysqli_num_rows($select_query_result);
if($Newpassword === $Retypepassword && $row >0)
{
$success = "<span class='green'>Password Changed</span>";
$updated_query = "UPDATE users SET password = '$Newpassword' where email = '$email'";
$updated_submit = mysqli_query($con, $updated_query) or die(mysqli_error($con));
header('location: Settings.php?message='.$success);
}
else if($Newpassword === $Retypepassword)
{ 
    $invalid = "<span class='red'>Enter Correct Password</span>";
    header('location: Settings.php?message='.$invalid);

}
 else 
 {
    $error = "Please enter same new Password"; 
    header('location: Settings.php?message='.$error);
}

?>

