<?php
session_start(); 
include_once("include/admincon.php");

if (isset($_POST['submit'])) {
  $sql = "CREATE TABLE IF NOT EXISTS admintable (
    adminid INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    email VARCHAR(50),
    password VARCHAR(50),
    cover VARCHAR(20) )";
    if ($conn->query($sql)==TRUE) {
        echo "create table successfully";
    }
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    // Check if photo is uploaded
    if (isset($_FILES['cover']['name'])) {
        $target = 'assets/bookstoreadmin/';
        $file_name = $_FILES['cover']['name'];
        move_uploaded_file($_FILES['cover']['tmp_name'], $target . $file_name);
    } else {
        echo "No file upload";
    }
    
    $insertsql = "INSERT INTO admintable (email, password,cover)
            VALUES ('$email', '$password',  '$file_name')";

    if ($conn->query($insertsql) === TRUE) {
        echo "user add added successfully";
        $id = $conn->insert_id;
        $_SESSION['email'] = $email;
        $_SESSION["adminid"]=$id;
          header("location:dashboard.php?login=true&select=dashboard");
       
        // $_SESSION['password'] = $password;
       
        
    } else {
        echo "Query error: " . $conn->error;
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
    <h2>Sign Up</h2>
    <form action="" method="post" enctype="multipart/form-data">
      <input name="email" class="btn" type="email" placeholder="Enter email"  style="width:100%;"><br>
      <input name="password" type="password" placeholder="Password" ><br>
      <input name="cover" class="btn" type="file" >
        <br>
      <button name="submit" class="btn one" style="width:100%;" type="submit" >Sign up</button>
    </form>
  </div>
</body>
</html>
