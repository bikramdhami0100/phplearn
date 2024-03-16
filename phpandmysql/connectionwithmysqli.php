<?php 
$host="localhost";
$usename="root";
$password=null;
$database="college";
$connection=new mysqli($host,$usename,$password,$database);
if($connection->connect_error){
    die("connection failed".$connection->connect_error);
}else{
    echo "connect successfully !!";
    $result=$connection->query("show tables")->fetch_all();
    echo"<br/>";
  print_r($result);
}
?>