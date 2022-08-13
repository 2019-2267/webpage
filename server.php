<?php

  session_start();

  $username = "";
  $email = "";
  $errors = array();

  
  $db =  mysqli_connect('localhost','root','','obenza');

  
  if(isset($_POST['register'])){

    $id = mysqli_real_escape_string($db, $_POST['id']);
	$firstname = mysqli_real_escape_string($db, $_POST['firstname']);
	$lastname = mysqli_real_escape_string($db, $_POST['lastname']);
	$gender = mysqli_real_escape_string($db, $_POST['gender']);
	$username = mysqli_real_escape_string($db, $_POST['username']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password_1 = mysqli_real_escape_string($db, $_POST['password_1']);
    $password_2 = mysqli_real_escape_string($db, $_POST['password_2']);
	$time = mysqli_real_escape_string($db, $_POST['time']);

    

    if(empty($username)){
      array_push($errors, "Username is required");
    }
	 if(empty($id)){
      array_push($errors, "id is required");
    }
    if(empty($email)){
      array_push($errors, "Email is required");
    }
	if(empty($gender)){
      array_push($errors, "Gender is required");
    }
	if(empty($lastname)){
      array_push($errors, "Lastname is required");
    }
	if(empty($firstname)){
      array_push($errors, "Firstname is required");
    }
    if(empty($password_1)){
      array_push($errors, "Password is required");
    }
    if($password_1 != $password_2){
      array_push($errors, "Password do not match");
    }

    
    if(count($errors) == 0){
      $password = md5($password_1); 
      $sql = "INSERT INTO user (id, username, email, password, firstname, lastname, gender) VALUES ('$id','$username','$email','$password', '$firstname', '$lastname', '$gender')";
      mysqli_query($db,$sql);
      $_SESSION['username'] = $username;
      $_SESSION['success'] = "You are now registered! Please try to log in your account!";
      header('location: index.php'); 
    }
  }

 




  

    if (isset($_POST['login'])){
      $username = mysqli_real_escape_string($db, $_POST['username']);
      $password = mysqli_real_escape_string($db, $_POST['password']);

     

      if(empty($username)){
        array_push($errors, "Username is required");
      }
      if(empty($password)){
        array_push($errors, "Password is required");
      }
      if (count($errors) == 0) {
        $password = md5($password); 
        $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
        $result = mysqli_query($db , $query);

        if (mysqli_num_rows($result) == 1){
          $_SESSION['username'] = $username;
          $_SESSION['success'] = "You are now logged in";
          header('location: /webpage/shopping_cart/index.php'); 
        } else {
          array_push($errors,"Wrong username/password combination");
        }
      }

    }

  
  if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['username']);
    header('location: login.php');
  }

?>
