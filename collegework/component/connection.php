<?php 
$host="localhost";
$user="root";
$password="";
$connection=new mysqli($host,$user,$password);
if ($connection) {
    echo"connection successfully";
}else{
    echo"connection fail";
}
?>