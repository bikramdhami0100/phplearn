<?php
if ($_POST) {
    echo"<h1>data come form sign up page</h1>";
    echo "User name is: ".$_POST["fullname"];
    echo "<br/>";
    echo "User email is: ".$_POST["email"];
    echo "<br/>";
    echo "User password is: ".$_POST["password"];
    echo "<br/>";
}else {
    echo "Illegal Access !!";
}
 ?>