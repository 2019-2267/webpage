<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" type="text/css" href="style2.css">
  <title>Login</title>
</head>
<body>
  <div class= "header">
    <h2>JSON SHOE SHOP </h2>
  </div>

  <form method="post" action = "login.php">

  <!---display validation --->
  <?php include('errors.php'); ?>
 <h2> Log in! & CHECK YOUR DETAILS </h2>
    <div class="input-group">
      <label>Username</label>
      <input type="text" name="username" id="">
    </div>
    <div class="input-group">
      <label>Password</label>
      <input type="password" name="password">
    </div>
    <div class="input-group">
      <button type="submit" name="login" class="btn">Login</button>
    </div>
    <p>Not yet a member? <a href="register.php">Sign up</a></p>
    <p>Want to know other a members? Go to our Member's data! <a href="table.php">Lets go!</a></p>
  </form>
</body>
</html>