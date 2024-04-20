<?php 
 include_once("./databasecreate.php");
//  
 $table="CREATE TABLE IF NOT EXISTS employee (id int(6) unsigned auto_increment primary key, firstName varchar(20) not null, lastName varchar(20) not null, email varchar(30), mobileNumber varchar(20), department varchar(20), salary decimal(10,2) )";
 if($connection->query($table)){
      echo $connection->query($table);
 }else{
    echo "failed to create table";
 }
?>