<?php
 session_start();
 echo $_SESSION["id"];
 if (isset($_SESSION["id"])) {
    session_destroy();
    header("location:index.php?login=false");
 }
?>