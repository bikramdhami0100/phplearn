<?php 
include_once("include/connection.php");
$id=$_GET['id'];
$sql="DELETE FROM students where id=$id";
if($conn->query($sql)==true){
    echo "record deleted";
    header('location:saru.php?success=delete');
    exit();
}else{
    echo "failed to delete record ";
}

?>