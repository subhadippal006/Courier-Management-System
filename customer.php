<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
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
div {
  border: 10px solid black;
  background-color: ghostwhite;
  padding-top: 20px;
  padding-right: 30px;
  padding-bottom: 100px;
  padding-left: 30px;
}
 body{
               background-color:silver;
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
   
  
   </head>

<body>
  <center>
<h1>Courier Management System</h1>
  <br>
  <img src="cimage.jpg" width="300px" height="270px" />
  <br>
  
  <br>
  <br>
  <br>
  <div>
  <p><b>Track Courier</b></p>
  <form action="track.php" method='post'>
  <label for="did">Enter Delivery Number</label>
  <input type="text" id="did" name="did">
  <button type="submit" class="button">Submit</button>
  <br>
  </center>
  </form>
  
  </div>
  
   </body>
  
</html>