<?php
  
include_once('connection.php');
   
function test_input($data) {
      
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
   
if ($_SERVER["REQUEST_METHOD"]== "POST") {
      
    $adminname = test_input($_POST["customername"]);
    $password = test_input($_POST["password"]);
    $stmt = $conn->prepare("SELECT * FROM customerlogin");
    $stmt->execute();
    $users = $stmt->fetchAll();
      
    foreach($users as $user) {
          
        if(($user['customername'] == $adminname) && 
            ($user['password'] == $password)) {
                header("Location: customer.php");
        }
        else {
            echo "<script language='javascript'>";
            echo "alert('WRONG INFORMATION')";
            echo "</script>";
            die();
        }
    }
}
  
?>