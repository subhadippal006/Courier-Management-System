<?php

include 'conn.php';

$shid = $_GET['shid'];

$z = " DELETE FROM `scheduletable` WHERE shid = $shid ";

mysqli_query($con, $z);

header('location:scdetails.php');

?>