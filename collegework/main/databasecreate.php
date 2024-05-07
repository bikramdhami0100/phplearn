<?php 
include_once("../component/connection.php");

echo "<br/>";
$dbname="create database if not exists company";
if ($connection->query($dbname)==true) {
    $connection->select_db("Company");
    echo "select database successfull";
      
}else{
    echo "Error creating database ".$connection->error;
}
?>