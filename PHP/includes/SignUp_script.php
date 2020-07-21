
<?php

$con = mysqli_connect("localhost", "root", "", "ecommerce") or die(mysqli_error($con));
$email = $_POST['email'];
//$regex_email = "/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/";

//if (!preg_match($regex_email, $email)) {
//  header('location: index1.php? message=enter correct email');
//}
$name = $_POST['name'];
$password = $_POST['password'];

if (strlen($password) < 6) {
  header('location: index1.php? message=enter correct password');
}
$email = mysqli_real_escape_string($con, $email);
$password = mysqli_real_escape_string($con, $password);
$Contact = $_POST['contact'];
$City = $_POST['city'];
$Address = $_POST['address'];


$select_query = "SELECT *FROM users WHERE email = '$email'";
$select_query_result = mysqli_query($con, $select_query) or die(mysqli_error($con));
//signify that user already exist
if(mysqli_num_rows($select_query_result)>0)
{ echo "user already exist";}
else
{
$user_registration_query = "INSERT INTO users(name, email, password, contact, city, address) VALUES ('$name','$email','$password','$Contact','$City','$Address')";
$user_registration_submit = mysqli_query($con, $user_registration_query) or die(mysqli_error($con));
$_SESSION['email'] = $row['email'];
$_SESSION['user_id'] = mysqli_insert_id($con);
header('location: products.php');
}
?>
