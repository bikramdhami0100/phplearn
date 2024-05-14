<?php 
require_once"connection.php";
$id=$_GET['id'];
$sql="DELETE FROM saru where id=$id";
if($conn->query($sql)==true){
    echo "record deleted";
    header('location:saru.php?success=the record has been deleted');
    exit();
}else{
    echo "failed to delete record ";
}

?>