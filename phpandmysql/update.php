<?php 
include("./config.php");
if ($_REQUEST==null) {
    echo"<br/>";
    echo"pleae go to delete.php to click on edit";
}else{
    print_r($_REQUEST["id"]);
$id=$_REQUEST["id"];
$getstudent=$conn->prepare("select * from students where students.id=$id");
$getstudent->execute();
$result= $getstudent->fetchAll();
print_r($result);
$name=$result[0]["name"];
$address=$result[0]["address"];
$batch=$result[0]["batch"];

print_r($name);
  echo"
  <form action='' method='post'>
    
    <input placeholder='please edit $name'  type='' name='name'/>
    <br/>
    <br/>
    <input placeholder='please edit $address'  type='' name='address'/>
    <br/>
    <br/>
    <input placeholder='please edit $batch'  type='' name='batch'/>
    <br/>
    <br/>
    <button type='submit' name='btn' value='$id'> 
        Submit
    </button>
</form>
  ";

if ($_REQUEST["btn"]=="$id") {
    $bat=$_REQUEST["batch"];
    $na=$_REQUEST["name"];
    $add=$_REQUEST["address"];
   
    $update=$conn->prepare("update students set name='$na', batch='$bat',address='$add' where students.id='$id'");
    $update->execute();
    $res=$update->fetchAll();
    print_r("this is updated resutl: $res");
}
}

?>