<?php
$host="localhost";
$username="root";
$password="";
$database="student";
//create object
$conn=new mysqli($host,$username,$password);

if($conn==TRUE){

echo "connecting";
echo "<br/>";
$createdb="create database if not exists college2";
if ($conn->query($createdb)==TRUE) {
      $conn->select_db("college2");
    //   print_r($conn);
}else{
    echo "database is not selected";
}
}
else
{
    die("connecion failed".$conn->connect_error);
  
}

?>