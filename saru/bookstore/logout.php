<?php
 session_start();
 echo $_SESSION["adminid"];
 if (isset($_SESSION["adminid"])) {
    session_destroy();
    header("location:index.php?login=false");
 }
?>