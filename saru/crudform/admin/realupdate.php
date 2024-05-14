<?php
include_once("include/connection.php");
echo "update";
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";
if(isset($_FILES['photo'])){
 
    $file_name=$_FILES['photo']['name'];
   $file_tmp=$_FILES['photo']['tmp_name'];
   //  $file_type=$_FILES['photo']['type'];
   //  $file_size=$_FILES['photo']['size'];
     move_uploaded_file($file_tmp,"assets/images/$file_name");
   }else{
    $file_name=$_FILES['photo']['name'];
    echo "File is not upload ";
    header("location:saru.php?status=uploadfail");
   }
if (isset($_REQUEST["submit"])) {
     $uid=$_REQUEST["id"];
     $ufname=$_REQUEST["firstname"];
     $ulname=$_REQUEST["lastname"];
     $uemail=$_REQUEST["email"];
     $upassword=md5($_REQUEST["password"]);
     $uaddress=$_REQUEST["address"];
     $unumber=$_REQUEST["number"];
     $uprogram=$_REQUEST["program"];
     $ubatch=$_REQUEST["batch"];
     $ugender=$_REQUEST["gender"];
     $usemester=$_REQUEST["semester"];
    //  $uphoto=$_REQUEST["photo"];
    $updatesql="UPDATE `students` SET `first_name`='$ufname',`last_name`='$ulname',`address`='$uaddress',`email`='$uemail',`moblie_number`='$unumber',`gender`='$ugender',`program`='$uprogram',`batch`='$ubatch',`semester`='$usemester',`password`='$upassword',`photo`='$file_name' WHERE id=$uid";
    if ($conn->query($updatesql)==TRUE) {
         print_r($conn);
         header("location:saru.php?success=update");
    }else{
        echo " Not updated ";
    }

}
?>