<!DOCTYPE HTML>  
<html>
<head>
  <title>Form Login</title>
</head>
<body>
<!-- <div class="topnav">
 
  <a  href="WebHome.php">Home</a>
  <a href="Login.php">Login</a>
  <a class="active" href="reg.php">Registration</a></div>
</div> -->
 <div><?php 
 include 'navbar.php';
 //include("../control/login_process.php");
 ?></div>  
 
 

 <div class="form"> 
<form method="post" action="../control/login_prcess.php">


 
<h1>Login</h1>

   <hr>
   <div class="form-control">
  <label> User Name: </label>
  <input type="text" size= "30" name="username" id="username" placeholder="Enter your name">
  <span class="error" id="usernameErr"><?php if(!empty($_GET['usernameErr'])){echo $_GET['usernameErr'];} ?></span></div>
  <br>

 <div class="form-control">
  <label>Password:</label>
  <input type="password" size="30" name="password" id="password" placeholder="Enter your password">
  <span class="error" id="passwordErr"><?php if(!empty($_GET['passErr'])){echo $_GET['passErr'];} ?></span></div>
  <br>
  <hr> 

  <input type="submit" name="submit" value="Submit" >&nbsp;

   
  <a href="ForgotPassword.php" class="active">Forgot password?</a><br><br><br>
  <p>Don't have an account?&nbsp;<a href="../reg.php" class="active">Sign Up</a></p> 


</form><br>

</body>
</html>