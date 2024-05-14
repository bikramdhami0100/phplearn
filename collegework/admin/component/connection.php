<?php 
$host="localhost";
$user="root";
$password="";
$connection=new mysqli($host,$user,$password);
if ($connection) {
    $connection->select_db("college");
    // echo"connection successfully";
}else{
    echo"connection fail";
}
?>