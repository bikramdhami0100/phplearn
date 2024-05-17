<?php
// session_start(); 
// include_once("include/connection.php");
include_once("include/admincon.php");
session_start();
if (isset($_POST['submit'])) {
   print_r($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
  $selectsql="select * from admintable	where email='$email' ";
  $data=$conn->query($selectsql);
  if ($data->num_rows>0) {
     $result=$data->fetch_assoc();
     print_r($result);
     $id=$result["adminid"];
   
     if ($password===$result["password"]) {
      $_SESSION["adminid"]=$id;
      $_SESSION["email"]=$email;
       header("location:dashboard.php?admin=login&select=dashboard&id=$id");
       exit();
     }
  }
    
 
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login Page</title>
 <link rel="stylesheet" href="assets/css/login.css">
</head>
<body>
  <div class="login-container">
    <h2>Login</h2>
    <form action="" method="post" >
      <input name="email" type="email" placeholder="Enter Email" required><br>
      <input name="password" type="password" placeholder="Password" required><br>
      <input name="submit" type="submit" value="Login">
     
    </form>
    <p>If you do not have an account? <a href="signup.php">Sign up</a></p>
  </div>
</body>
</html>
