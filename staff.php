<?php
include"./connectxyz.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$branchcode=$_POST['branchcode'];	
$branchname=$_POST['branchname'];
$branchaddress=$_POST['branchaddress'];
$branchpincode=$_POST['branchpincode'];
$staffname=$_POST['staffname'];
$phnumber=$_POST['phnumber'];	
$address=$_POST['address'];



$query="INSERT INTO staff(`branchcode`,`branchname`,`branchaddress`,`branchpincode`,`staffname`,`phnumber`,`address`)VALUES('$branchcode','$branchname','$branchaddress','$branchpincode','$staffname','$phnumber','$address')";
$query_exec=mysqli_query($connection,$query);
header("Location: http://localhost/dbmsminiproj/schedule.html");
}
else
	echo"your data not stored";
?>