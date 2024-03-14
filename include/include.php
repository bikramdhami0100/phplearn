<?php
// include("./page.php"); //if we write ./page1.php it give only warning but require give fatal error
// for ($i=0; $i <5 ; $i++) { 
//     include_once("./page.php");
// }
// require("./page.php"); //direct give the fatal error 
for ($i=0; $i <5 ; $i++) { 
    require_once("./page.php");
}
?>