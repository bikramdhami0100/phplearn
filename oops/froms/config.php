<?php
   $host="localhost";
   $db="college";
   $username="root";
   $password=null;
 try {
    $conn=new PDO("mysql:host=$host;dbname=$db",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
 } catch (\Throwable $th) {
    echo "connection failed".$th->getMessage();
 }

 ?>