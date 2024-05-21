<?php 
require_once "../include/connection.php";
$id=$_GET['id'];
$sql="DELETE FROM book where id=$id";
if($conn->query($sql)==true){
    echo "record deleted";
    header("location:../dashboard.php?login=true&select=addbooks");
    exit();
}else{
    echo "failed to delete record ";
}

?>