<?php
$host="localhost";
$user="root";
$password="";
$connection=new mysqli($host,$user,$password);
// if ($connection) {
//     echo "<br/>";
// }else{
//     echo"connection fail";
// }
$dbname="create database if not exists students";
$connection->query($dbname);
// for selection of database code 
$connection->select_db("students");
echo "<br/>";
echo "Database connection successfull";

?>