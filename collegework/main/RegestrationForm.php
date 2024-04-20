<?php 
include_once("./registrationdbcon.php");
$firstName = $_POST["fname"];
$lastName = $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];
$address = $_POST["address"];
$mobile = $_POST["mobile"];
$gender = $_POST["gender"];
$program = $_POST["program"];
echo "<pre>";
print_r($_POST);
echo "</pre>";
        // $sqlfortable="create table if not exists student(id int(10) unsigned auto_increment primary key,firstname varchar(20) not null, lastname varchar(20), email varchar(20) not null, password varchar(30) not null, address varchar(20) not null, mobilenumber varchar(15) not null, gender varchar(10) not null, program varchar not null ) ";
        $sqlfortable = "CREATE TABLE IF NOT EXISTS student (
            id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(20) NOT NULL,
            lastname VARCHAR(20),
            email VARCHAR(50) NOT NULL,
            password VARCHAR(30) NOT NULL,
            address VARCHAR(100) NOT NULL,
            mobilenumber VARCHAR(15) NOT NULL,
            gender VARCHAR(10) NOT NULL,
            program VARCHAR(50) NOT NULL
        )";
        $connection->query($sqlfortable);
        if ($connection->query($sqlfortable)==true) {
            # code...
            echo "<br/>";
            echo ("create table successfully");
        }
       
   $sqlforinsertvalues="insert into student values('null','$firstName', '$lastName', '$email', '$password', '$address', '$mobile', '$gender', '$program')";
   echo "<br/>";
  if (   $connection->query($sqlforinsertvalues)==true) {
    # code...
    echo "value insert successfully ";
  }else {
    echo "value inset failed".$connection->error;
  }
  $connection->close();


?>
