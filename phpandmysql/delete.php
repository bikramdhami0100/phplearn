<?php
include("./config.php");
$data=$conn->prepare("select name,id,address,batch from students");
$data->execute();
$result=$data->fetchall();

foreach ($result as $key=> $value) {
    $newarr=[];
  
    echo"<pre>";
   print_r($value);
   echo"</pre>";
}

?>
