<?php  
 require('db_connect.php');

if (isset($_POST['email']) and isset($_POST['password'])){
	
// Assigning POST values to variables.
$username = $_POST['email'];
$password = $_POST['password'];

// CHECK FOR THE RECORD FROM TABLE
$query = "SELECT * FROM `users` WHERE username='$email' and Password='$password'";
 
$result = mysqli_query($connection, $query) or die(mysqli_error($connection));
$count = mysqli_num_rows($result);

if ($count == 1){

//echo "Login Credentials verified";
echo "<script type='text/javascript'>alert('Login Credentials verified')</script>";
echo "Hello login sucessful!!";
echo '<a href="login.php"><br><br><br>click here to logout</a>';
}else{
echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
//echo "Invalid Login Credentials";
echo "login failed";
}
}
?>
