<?php
$host="localhost";
$user="root";
$password="";
$connection=new mysqli($host,$user,$password);

$dbname="create database if not exists bookstore";
$connection->query($dbname);
// for selection of database code 
$connection->select_db("bookstore");
echo "<br/>";
echo "Database connection successfull";

?>