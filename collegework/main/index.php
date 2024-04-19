<?php 
include_once("../component/connection.php");
$dbname="Create database College";
if ($connection->query($dbname)) {
   echo"database create successfully ";
}else{
    echo "database create fail";
}
?>