<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
    border: 1px solid black;
}
figcaption {
      color:black;
      font-style: italic;
      padding: 5px;
      text-align: center;
    }
    * {
      box-sizing: border-box;
    }
    
    .column {
      float: left;
      width: 20%;
      padding: 20px;
    }
    
    /* Clearfix (clear floats) */
    .row::after {
      content: "";
      clear: both;
      display: table;
    }
    </style>
<style>
  
   ul {
     list-style-type: none;
     margin: 0;
     padding: 0;
     overflow:hidden;
     background-color: #FFD700;
   }
   
   li {
     float: left;
   }
   
   li a {
     display: block;
     color: black;
     text-align: center;
     padding: 14px 16px;
     font-size: large;
     text-decoration: none;
   }
   
   li a:hover {
     background-color:ghostwhite;
   }
   .checked {
  color: orange;
}
div {
  border: 10px solid black;
  background-color: ghostwhite;
  padding-top: 20px;
  padding-right: 30px;
  padding-bottom: 100px;
  padding-left: 30px;
}
 body{
               background-color:ghostwhite;
            } 
			.button {
  background-color:gold;
  border: none;
  color: black;
  padding: 4px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}

</style>
<body>
<ul>
   <li><a class="active" href="home.html"><b>Home</b></a></li>
   <li><a href="couriers.html"><b>Courier</b></a></li>
   <li><a href="staff.html"><b>Staff</b></a></li>
   <li><a href="schedule.html"><b>Schedule</b></a></li>
   <li><a href="delivery.html"><b>Delivery</b></a></li>
 </ul>
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