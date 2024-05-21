<?php
$host="localhost";
$user="root";
$password="";
$connection=new mysqli($host,$user,$password);

$dbname="create database if not exists college";
$connection->query($dbname);
// for selection of database code 
$connection->select_db("college");
echo "<br/>";
echo "Database connection successfull";

?>