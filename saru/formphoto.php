<?php
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
        echo "moblienumber:- $Moblienumber</br>";
        echo "program:- $Program</br>";
        echo "batch:- $Batch</br>";
        echo "address:- $Address</br>";
        echo "semester:- $Semester</br>";
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
      width:90%;
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
<div class="container">
    <div class="title">
    Registration Form</div>
    
    <form name="registration"  action="" method="POST"  enctype="multipart/form-data">     
    <tr> 
   <td><b> FirstName:</b></td> 
   <input type="text" name="firstname"><br><br>
</tr>
   <tr>
    <td><b> LastName:</b></td> 
    <input type="text" name="lastname"><br><br>
</tr>
    <tr>  
    <td> <b> Enter your Email: </b> </td>  
    <td> <input type="text" name="email"  > </td>  
  </tr>  <br><br>
  <tr>  
    <td> <b> Enter your Password: </b> </td>  
    <td> <input type="text" name="password" > </td>  
  </tr>  <br><br>
  <td> <b> Enter your Address: </b> </td>  
    <td> <input type="text" name="address">  </td>  
  </tr>  <br><br>
  <tr>  
    <td> <b> Enter your Mobile Number: </b> </td>  
    <td> <input type="text"  name="number" > </td>  
  </tr>  <br><br>
  <tr>  
    <td> <b> Select your Gender: </b> </td>  
    <td>  
    Male <input type="radio" name="gender" value="female"/>  
    Female <input type="radio" name="gender" value="male"/>  
    </td>  
  </tr>  <br><br>
  <tr> 
    <td><b>Select program:</b></td>
           <td>
            <select name="program">
             <option>JAVA</option>  
            <option>C++</option>
            <option>PYTHON</option>
</select>
</td>
</tr><br><br>
<tr> 
    <td><b>Select Batch:</b></td>
           <td>
            <select name="batch">
             <option>BSC CSIT</option>  
            <option>BIT</option>
            <option>B.ED CSIT</option>
</select>
</td>
</tr><br><br>
<tr> 
    <td><b>Select Semester:</b></td>
           <td>
            <select name="semester">
             <option>Third</option>  
            <option>Second</option>
            <option>Fifth</option>
</select>
</td>
</tr><br><br>
        <br>
    
    <tr>  
    <td> <b> Select your Profile Pic: </b> </td>  
    <td> <input type="file" name="photo"/> </td>  
  </tr>  <br><br>
        
     submit<input type="submit" value="submit" ></br>
        <br>
</form>
</body>
</html>
