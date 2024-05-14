<?php

 include_once("../include/registrationdbcon.php");
 
if (isset($_REQUEST['id']))

 {
    
    $id=$_REQUEST["id"];
    $sqldelete= "SELECT * FROM student WHERE id=$id";
    $result=$connection->query($sqldelete);
   if ($result->num_rows>0) {
       
    $res=$result->fetch_assoc();
    //   print_r($res);
      $photoname=$res["photo"];
    $destination="../assests/images/$photoname";

    $deletesql="delete from student where id=$id";
    if ($connection->query($deletesql)==TRUE) {
        if (file_exists($destination)) {
            unlink($destination);
            echo "Image deleted successfully.";
        } else {
            echo "Image not found in destination folder.";
        }
        echo "User is deleted successfully";
        header("location:getValue.php?value=delete");
    }
   }
    
  
}else{
    echo " User is not selected ";
}
?>