<?php
session_start();
if (!isset($_SESSION["id"])) {
   print($_SESSION["id"]);
   header("location:index.php?value=flogin");
}
else{
    // echo "session set";
    include_once("./component/header.html");
    if (isset($_GET["id"])) {
        include_once("./component/mainbody.php");
    }
    // if (isset($_GET["id"])) {
    //     include_once("component/mainbody.php");
    // $data=$_GET["id"];
    // // print_r($data);
    // header("location:component/mainbody.php?id=$data");
    // }
    // if (isset($_GET["value"])) {
    //     // include_once("component/mainbody.php");
    //     $data=$_GET["value"];
    //     // print_r($data);
    //     header("location:component/mainbody.php?value=$data");
    // }
    
    // include_once("component/footer.html");
}

?>