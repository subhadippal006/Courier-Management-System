<?php

 include 'conn.php';

 if(isset($_POST['done'])){

 $shid = $_GET['shid'];
 $date=$_POST['date'];
 $brcode = $_POST['brcode'];
 $staffname = $_POST['staffname'];
 $cournum = $_POST['cournum'];
 $z = " update scheduletable set shid=$shid, date=$date, brcode=$brcode, staffname=$staffname, cournum=$cournum where shid=$shid  ";

 $query = mysqli_query($con,$z);

 header('location:scdetails.php');
 }

?>

<!DOCTYPE html>
<html>
<head>
 <title></title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

 <div class="col-lg-6 m-auto">
 
 <form method="post"><label> Branch Code </label>
 
 
 <br><br><div class="card">
 
 <div class="card-header bg-dark">
 <h1 class="text-white text-center">  Update Operation </h1>
 </div><br>
 <label> Date </label>
 <input type="datetime-local" name="date" class="form-control"> <br>
 
<label>Branch Code</label>
 <input type="text" name="brcode" class="form-control"> <br>
 <label> Staff Name </label>
 <input type="text" name="staffname" class="form-control"> <br>
 <label> Courier No. </label>
 <input type="text" name="cournum" class="form-control"> <br>

 <button class="btn btn-success" type="submit" name="done"> Submit </button><br>

 </div>
 </form>
 </div>
</body>
</html>