<?php
include_once'connection.php'; 
$sql="";
if($conn->query($sql)===TRUE)
{
    echo"database create succesfully";
echo"database student created successfully";
}
else{
    die("Query error:".$conn->error);
}
?>




