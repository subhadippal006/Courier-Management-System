<?php      
    include('connectxyz.php');  
    $customername = $_POST['customername'];  
    $password = $_POST['password'];  
      
        //to prevent from mysqli injection  
        $customername = stripcslashes($customername);  
        $password = stripcslashes($password);  
        $customername = mysqli_real_escape_string($connection, $customername);  
        $password = mysqli_real_escape_string($connection, $password);  
      
        $sql = "select *from customerlogin where customername = '$customername' and password = '$password'";  
        $result = mysqli_query($connection, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            header("Location: customer.php"); 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  