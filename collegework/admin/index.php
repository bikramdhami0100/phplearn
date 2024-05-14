<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        
        form {
            max-width: 400px;
            margin: 50px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        
        h1 {
            text-align: center;
            margin-bottom: 20px;
        }
        
        label {
            font-weight: bold;
        }
        
        input[type="text"],
        input[type="password"] {
            width: calc(100% - 20px);
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        
        input[type="submit"] {
            width: 100%;
            background-color: #333;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        input[type="submit"]:hover {
            background-color: #555;
        }
        
        p {
            text-align: center;
            margin-top: 20px;
        }
        
        p a {
            color: #333;
            text-decoration: none;
            font-weight: bold;
        }
        
        p a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <h1>Login Page</h1>
        <label for="username">UserName/Email</label>
        <input type="text" name="username" id="username">
        <br><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password">
        <br>
        <input type="submit" value="Login" name="login">
    </form>
    <p>If you do not have an account, <a href='http://localhost/phplearn/collegework/admin/main/RegistrationForm.html'>sign up</a>.</p>
</body>
</html>

<?php
require_once("component/connection.php");
session_start();
if (isset($_POST["login"])) {
  
   $username = $_POST["username"];
   $password = $_POST["password"];
   $pass = md5($password);
   $sql = "select * from student where email='$username' and password='$pass'";
   $data = $connection->query($sql);
   if ($data->num_rows > 0) {
       $result = $data->fetch_assoc();
       $id = $result["id"];
       $_SESSION["id"] = $id;
       $_SESSION["email"] = $result["email"];
       header("location:dashboard.php?login=true&id=$id&goto=dashboard");
   } else {
       echo "Invalid user/email or password";
   }
}
?>
