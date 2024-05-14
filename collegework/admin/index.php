<form action="" method="post">
    <h1>Login Page</h1>
    <br>
    <label for="username">UserName/Email</label>
    <input type="text" name="username" id="">
    <br>
    <br>
    <label for="password">Password</label>
    <input type="text" name="password" id="">
    <br>
    <input type="submit" value="login" name="login" >
</form>
<p>if you have not account ? <a href='http://localhost/phplearn/collegework/admin/main/RegistrationForm.html' >sign up</a></p>
<?php
require_once("component/connection.php");
session_start();
if (isset($_POST["login"])) {
  
   $username=$_POST["username"];
   $password=$_POST["password"];
   $pass=md5($password);
   print_r($_POST);
   $sql="select *from student where email='$username' and password='$pass'";
    // print_r($_POST["password"]);
    $data=$connection->query($sql);
    if ($data->num_rows>0) {
        // print_r($data);
        $result=$data->fetch_assoc();
        print_r($result);
        $id=$result["id"];
        $_SESSION["id"]=$id;
        $_SESSION["email"]=$result["email"];
        
        // print($_SESSION["id"]);
        header("location:handler.php?success=login&id=$id");

    }else{
        echo "Invalid user/email or password";
    }
}
// ?>