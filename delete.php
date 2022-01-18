<?php

include 'conn.php';

$sid = $_GET['sid'];

$q = " DELETE FROM `staff` WHERE sid = $sid ";

mysqli_query($con, $q);

header('location:display.php');

?>