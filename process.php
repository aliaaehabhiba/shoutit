<?php
$username=$_POST['user'];
$password=$_POST['pass'];
$username=stripcslashes($username);
$password=stripcslashes($password);
$con=mysqli_connect("localhost","root","","login");



$username=mysqli_real_escape_string($con,$username);
$password=mysqli_real_escape_string($con,$password);

 $result=mysqli_query($con,"select*from users where username='$username' and password='$password'")
or die ("failed to query database".mysqli_error());
$row=mysqli_fetch_array($result);
if ($row['username']==$username && $row['password']==$password){
	echo "login success!!! welcome " .$row['username'];
}
else {
	echo "failed to login";
}
?>