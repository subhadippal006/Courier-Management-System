<?php
include"./connectxyz.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
$date=$_POST['date'];
$cournum=$_POST['cournum'];	
$brcode=$_POST['brcode'];
$staffname=$_POST['staffname'];

$query="INSERT INTO scheduletable(`date`,`cournum`,`brcode`,`staffname`)VALUES('$date','$cournum','$brcode','$staffname')";
$query_exec=mysqli_query($connection,$query);
header("Location: http://localhost/dbmsminiproj/delivery.html");
}
else
	echo"your data not stored";
?>