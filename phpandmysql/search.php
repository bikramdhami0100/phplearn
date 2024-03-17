<?php
include("./config.php");

echo"
<form action='' method='post'>
<input type='text' name='searchval' placeholder='Enter name here'> </input> 
<br/>
<br/>
<button type='submit' name='search' value='btn' type='search'>Submit</button>
</form>
";

if ($_REQUEST!=null) {
   if ($_REQUEST["search"]=="btn") {
      print_r($_REQUEST);
      $serarch=$_REQUEST["searchval"];
   $data=$conn->prepare("select name,id,address,batch from students where name like '%$serarch%'");
   $data->execute();
   $result=$data->fetchall();
   
   echo"<table border='1'>";
   
   foreach ($result as $key=> $value) {
        $id=$value["id"];
        $name=$value["name"];
        $address=$value["address"];
        $batch=$value["batch"];
        echo"<tr>";
        echo"<td>".$name."</td>";
        echo"<td>".$address."</td>";
        echo"<td>".$batch."</td>";
        echo"</tr>";
      
   }
   echo"</table>";
   
   }else{
      echo"search No found";
   }
   
   
   
   
}else{
   echo"please enter your name";
}

?>

