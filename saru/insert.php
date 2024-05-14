<?php
require_once'connection.php';
if(isset($_FILES['photo'])){
  echo"<pre>";
  print_r($_FILES);
echo"</pre>";
 $file_name=$_FILES['photo']['name'];
$file_tmp=$_FILES['photo']['tmp_name'];
 $file_type=$_FILES['photo']['type'];
 $file_size=$_FILES['photo']['size'];
  move_uploaded_file($file_tmp,"upload-image/".$file_name);
}
if(isset($_POST['submit'])){
    $Firstname=$_POST['firstname'];
    $Lastname=$_POST['lastname'];
    $Address=$_POST['address'];
    $Moblienumber=$_POST['number'];
    $Password=$_POST['password'];
    $Gender=$_POST['gender'];
    $Email=$_POST['email'];
    $Program=$_POST['program'];
    $Batch=$_POST['batch'];
    $Semester=$_POST['semester'];
    echo "firstname:- $Firstname</br>";
    echo "lastname:- $Lastname</br>";
    echo "password:- $Password</br>";
    echo "email:- $Email</br>";
    echo "gender:- $Gender</br>";
    echo "number:- $Moblienumber</br>";
    echo "program:- $Program</br>";
    echo "batch:- $Batch</br>";
    echo "address:- $Address</br>";
    echo "semester:- $Semester</br>";

    if (isset($_FILES['photo']['name'])){
      $target='assets/upload_image/upload';
      $file_name=$_FILES['photo']['name'];
      move_uploaded_file($_FILES['photo']['tmp_name'],"upload-image/".$file_name);
      }
      else{
        $file_name='';
      }
    $sql = "INSERT INTO saru (first_name, last_name, address, email, mobile_number, gender, program, batch, semester,password,photo)
    VALUES ('$Firstname', '$Lastname', '$Address', '$Email', '$Moblienumber', '$Gender', '$Program', '$Batch', '$Semester','$Password,'$file_name')";
    
    echo $sql; // Add this line for debugging
    
    if ($conn->query($sql) === TRUE) {
      //echo "Student record added successfully";
      header('location:saru.php?success=insert');
      exit();
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
    <title>form</title>
    <style>::after
    * {  
    padding: 0;  
    margin: 0;  
    box-sizing: border-box;  
}  
body{
    background-color:whitesmoke ;
    
}
.container{  
    margin:50px auto;  
    text-align: center;  
    max-width:500px;  
    width:100%;
    border:5px solid #ccc;  
    margin:20px auto;  
    padding:30px;  
    background-color:cornsilk ;
    
}  
.title{
    font-size: 24px;
   
    margin-bottom: 25px;
    color: #1A33FF;
    text-align: center;
    text-transform: uppercase;
    font-family: sans-serif; 
    font:bold;
}




form {  
    margin:10px auto;  
    padding:10px;  
      width: 100%;
    background:cornsilk   
}  
h1 {  
    font-family: sans-serif;  
  display: block;  
  font-size: 2rem;  
  font-weight: bold;  
  text-align: center;    
  color: hotpink;  
    text-transform: uppercase;  
}  
    input[type=submit] {    
  border: 3px solid;    
  border-radius: 2px;     
  display: block;    
  font-size: 1em;    
  font-weight: bold;    
  margin: 1em auto;    
  padding: 1em 4em;    
 position: relative;    
  text-transform: uppercase;    
}    

input[type=submit]:hover {    
  color: #1A33FF;    
}    
</style>  
</head>
<body>
  <h1><a href="http://localhost/php1/saru.php">Student List</a></h1>
    <div class="container">
    <div class="title">
    Registration Form</div>
    <form name="registration"  action="" method="POST"  enctype="multipart/form-data">     
   <tr> 
   <td><b>FirstName:</b></td> 
   <input type="text" name="firstname"><br><br>
</tr>
   <tr>
    <td><b>LastName:</b></td> 
    <input type="text" name="lastname"><br><br>
</tr>
    <tr>  
    <td><b>Enter your Email:</b></td>  
    <td> <input type="text" name="email"  > </td>  
  </tr>  <br><br>
  <tr>  
    <td><b>Enter your Password:</b></td>  
    <td> <input type="text" name="password" > </td>  
  </tr>  <br><br>
  <td><b>Enter your Address</b></td>  
    <td> <input type="text" name="address">  </td>  
  </tr>  <br><br>
  <tr>  
    <td><b>Enter your Mobile Number:</b></td>  
    <td> <input type="text"  name="number" > </td>  
  </tr>  <br><br>
  <tr>  
    <td><b>Select your Gender:</b></td>  
    <td>  
    Male <input type="radio" name="gender" value="male"/>  
    Female <input type="radio" name="gender" value="female"/>  
    </td>  
  </tr>  <br><br>
  <tr> 
    <td><b>Select program:</b></td>
           <td>
            <select name="program">
            <option value="C++">C++</option>  
            <option value="JAVA">JAVA</option>  
            <option value="PHP">PHP</option>  
            
</select>
</td>
</tr><br><br>
<tr> 
    <td><b>Select Batch:</b></td>
           <td>
            <select name="batch">
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
</select>
</td>
</tr><br><br>
<tr> 
    <td><b>Select Semester:</b></td>
           <td>
            <select name="semester">
            <option value="Third">Third</option>  
            <option value="Second">Second</option>  
            <option value="Fifth" >Fifth</option>  
            <option value="Sixth" >Sixth</option>  
</select>
</td>
</tr><br><br>
<tr>  
    <td><b>Select your Profile Pic:</b> </td>  
    <td> <input type="file" name="photo"/> </td>  
  </tr>  <br><br>
            
<br>
     submit<input type="submit" value="submit" name="submit"></br>
        <br>
</div>
</form>
</body>
</html>
