<!DOCTYPE html>
<html>
<head>
 <title></title>

 <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

 <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">
   <script type="text/javascript" charset="utf8" src="https://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script>
   
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
    
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
 body{
               background-color:ghostwhite;
            } 
			
   </style>
   
  
</head>
<body>
<ul>
   <li><a class="active" href="home.html"><b>Home</b></a></li>
   <li><a href="couriers.html"><b>Couriers</b></a></li>
   <li><a href="staff.html"><b>Staff</b></a></li>
   <li><a href="schedule.html"><b>Schedule</b></a></li>
   <li><a href="delivery.html"><b>Delivery</b></a></li>
 </ul>
 <br>

 <div class="container">
 <div class="col-lg-12">
 <br><br>
 <h1 class="text-warning text-center" > Display Table Data </h1>
 <br>
 <table  id="tabledata" class=" table table-striped table-hover table-bordered">
 
 <tr class="bg-dark text-white text-center">
 
 <th> Sid</th>
 <th> staffname </th>
 <th>Phone Number</th>
 <th>Address</th>
 <th> Delete </th>
 <th> Update </th>

 </tr >

 <?php

 include 'conn.php'; 
 $q = "select * from staff ";

 $query = mysqli_query($con,$q);

 while($res = mysqli_fetch_array($query)){
 ?>
 <tr class="text-center">
 <td> <?php echo $res['sid'];  ?> </td>
 <td> <?php echo $res['staffname'];  ?> </td>
 <td> <?php echo $res['phnumber'];  ?> </td>
 <td> <?php echo $res['address'];  ?> </td>
 <td> <button class="btn-danger btn"> <a href="delete.php?sid=<?php echo $res['sid']; ?>" class="text-white"> Delete </a>  </button> </td>
 <td> <button class="btn-primary btn"> <a href="update.php?sid=<?php echo $res['sid']; ?>" class="text-white"> Update </a> </button> </td>

 </tr>

 <?php 
 }
  ?>
 
 </table>  

 </div>
 </div>

 <script type="text/javascript">
 
 $(document).ready(function(){
 $('#tabledata').DataTable();
 }) 
 
 </script>

</body>
</html>