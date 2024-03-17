<?php
include("./config.php");
$data=$conn->prepare("select name,id,address,batch from students");
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
     echo"<td> <form action='' method='post'>
      <button type='submit' name='button' value='$id' >Delete User </button>

      </form>
      <td> <a href='./update.php?id=$id' > Update </a>
      </td>";
     echo"</tr>";
   
}
echo"</table>";
print_r($_REQUEST==null);
if ($_REQUEST==null) {
echo"use is not available";
}else{
  $idvalue=$_REQUEST["button"];
   $deleteuser=$conn->prepare("delete from students where students.id=$idvalue");
   $deleteuser->execute();
   $deleteuser->fetchAll();
//    print_r($deleteuser);
   echo("the user is deleted !!");
}



?>
