<?php
 echo "delete use successfully";
 include_once("../include/registrationdbcon.php");
 
if (isset($_REQUEST['id']))
 {
    
    $id=$_REQUEST["id"];
    
   $deletesql="delete from student where id=$id";
    if ($connection->query($deletesql)==TRUE) {
        echo "User is deleted successfully";
        header("location:getValue.php?value=delete");
    }
}else{
    echo " User is not selected ";
}
?>