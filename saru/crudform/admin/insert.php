<?php
 require_once("include/connection.php");

 $sql = "CREATE TABLE IF NOT EXISTS students(
  id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
  first_name VARCHAR(20) NOT NULL,
  last_name VARCHAR(20) NOT NULL,
  address VARCHAR(50),
  email VARCHAR(100),
  moblie_number VARCHAR(15), 
  gender VARCHAR(20),
  program VARCHAR(50),
  batch VARCHAR(10),
  semester VARCHAR(20),
  password VARCHAR(20),
  photo VARCHAR(20)
)";


if ($conn->query($sql) === TRUE) {
 echo "Student table created successfully";
} else {
  echo "Query error: " . $conn->error;
}

if(isset($_FILES['photo'])){
 
 $file_name=$_FILES['photo']['name'];
$file_tmp=$_FILES['photo']['tmp_name'];
//  $file_type=$_FILES['photo']['type'];
//  $file_size=$_FILES['photo']['size'];
  move_uploaded_file($file_tmp,"assets/images/$file_name");
}
if(isset($_REQUEST['submit'])){
    $Firstname=$_REQUEST['firstname'];
    $Lastname=$_REQUEST['lastname'];
    $Address=$_REQUEST['address'];
    $Moblienumber=$_REQUEST['number'];
    $Password=md5($_REQUEST['password']);
    $Gender=$_REQUEST['gender'];
    $Email=$_REQUEST['email'];
    $Program=$_REQUEST['program'];
    $Batch=$_REQUEST['batch'];
    $Semester=$_REQUEST['semester'];
    

   
    $insertsql = "INSERT INTO `students`( `first_name`, `last_name`, `address`, `email`, `moblie_number`, `gender`, `program`, `batch`, `semester`, `password`, `photo`) VALUES ('$Firstname','$Lastname','$Address','$Email','$Moblienumber','$Gender','$Program','$Batch','$Semester','$Password','$file_name')";
    
    // echo $sql; // Add this line for debugging
    
    if ($conn->query($insertsql) === TRUE) {
      echo "Student record added successfully";
      header('location:saru.php?success=insert');
      exit();
    } else {
      echo "Query error: " . $conn->error;
    }


}
?>


