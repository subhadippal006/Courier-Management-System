<?php
include"./connectxyz.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$customername=$_POST['customername'];	
$password=$_POST['password'];

$query="INSERT INTO customerlogin(`customername`,`password`)VALUES('$customername','$password')";
$query_exec=mysqli_query($connection,$query);
echo"<h2>your data is stored Now try to Login</h2>";

}
else
	echo"your data not stored";
?>