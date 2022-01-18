<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}


</style>
<body>
<center>
<h1>Courier Details</h1>
</center>
</body>
</head>
<body>

<?php
$host="127.0.0.1";
$user="root";
$password="";
$database="couriermanagement";

// Create connection
$conn = new mysqli($host, $user, $password, $database);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$track = $_POST['did'];
$sql = "SELECT did, couriernumber, branchname, staffname, deliveredto, date FROM deliverydetails where did=$track";
$result = $conn->query($sql);

if ($result->num_rows > 0) {

    echo "<center><table><tr><th>did</th><th>couriernumber</th><th>branchname</th><th>staffname</th><th>deliveredto</th><th>date</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["did"]. "</td><td>" . $row["couriernumber"]. "</td><td> " . $row["branchname"]. "</td><td>" . $row["staffname"]. "</td><td>" . $row["deliveredto"]. "</td><td>" . $row["date"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "<center><h2>Courier not yet delivered!!!</h2></center>";
}

$conn->close();
?>

</body>
</html>