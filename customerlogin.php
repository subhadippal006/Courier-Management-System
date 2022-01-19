<!DOCTYPE html>
<html lang="en">
  
<head>
<style>
.button2 {
  background-color:green;
  border: none;
  color: white;
  padding: 4px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
  margin: 4px 2px;
  cursor: pointer;
}
#bottom{
      position:absolute;
      bottom:0;
      left:400px;
  }
</style>
    <meta charset="UTF-8">
    <link rel="stylesheet" href=
"https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="login.css">
    <title>Customer Login Page</title>
</head>
  
<body>
    <form action="customervalidate.php" method="post">
        <div class="login-box">
            <h1>Customer Login</h1>
  
            <div class="textbox">
                <i class="fa fa-user" aria-hidden="true"></i>
                <input type="text" placeholder="Customername"
                         name="customername" value="">
            </div>
  
            <div class="textbox">
                <i class="fa fa-lock" aria-hidden="true"></i>
                <input type="password" placeholder="Password"
                         name="password" value="">
            </div>
  
            <input class="button" type="submit"
                     name="login" value="Sign In">
        </div>
    </form>
	<div id="bottom"><h3>Don't have an account..Then click on register <button type="submit"  class="button2" button onclick="document.location='#' ">Register</button></h3><div>
</body>
  
</html>