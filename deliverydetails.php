<?php
include"./connectxyz.php";
if($_SERVER["REQUEST_METHOD"]=="POST")
{

$couriernumber=$_POST['couriernumber'];	
$branchname=$_POST['branchname'];
$staffname=$_POST['staffname'];
$deliveredto=$_POST['deliveredto'];
$date=$_POST['date'];

$query="INSERT INTO deliverydetails(`couriernumber`,`branchname`,`staffname`,`deliveredto`,`date`)VALUES('$couriernumber','$branchname','$staffname','$deliveredto','$date')";
$query_exec=mysqli_query($connection,$query);
echo"  your data is stored";
}
else
	echo"your data not stored";
?>