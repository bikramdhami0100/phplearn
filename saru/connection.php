<?php
$host="localhost";
$username="root";
$password="";
$database="student";
//create object
$conn=new mysqli($host,$username,$password,$database);
if($conn->connect_error){
die("connecion failed".$conn->connect_error);
}
else
{
    //echo("connection succesful");
  
}

?>