<?php
$host="localhost";
$username="root";
$password="";
$database="bookstoreadmin";
//create object
$conn=new mysqli($host,$username,$password);
if ($conn==TRUE) {
   $createdbsql="create database if not exists bookstoreadmin ";
   if ($conn->query($createdbsql)==TRUE) {
      $conn->select_db("bookstoreadmin");
       echo "database create and select successfully";
   }else{
    echo "database is not create ";
   }
}

?>