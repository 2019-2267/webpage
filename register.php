<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <title>Register</title>
</head>
<body>
  <div class= "header">
    <h2>REGISTER</h2>
  </div>

  <form method="post" action = "register.php">
    <!---display validation --->
    <?php include('errors.php'); ?>
	
	<div class="input-group">
      <label>ID</label>
      <input type="text" name="id" id="">
    </div>
	<div class="input-group">
      <label>Firstname</label>
      <input type="text" name="firstname" id="">
    </div>
	<div class="input-group">
      <label>Lastname</label>
      <input type="text" name="lastname" id="">
    </div>
	
	<div class="input-group">
      <label>Gender</label>
      <input type="text" name="gender" id="">
    </div>
	
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" id="">
    </div>
	
	 
    <div class="input-group">
      <label>Email</label>
      <input type="text" name="email" id="">
    </div>

    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password_1" id="">
    </div>
    <div class="input-group">
      <label>Confirm Password</label>
      <input type="password" name="password_2" id="">
    </div>
    <div class="input-group">
      <button type="submit" name="register" class="btn">Register</button>
    </div>
    <p>Already a member? <a href="login.php">Sign in</a></p>
  </form>
</body>
</html>