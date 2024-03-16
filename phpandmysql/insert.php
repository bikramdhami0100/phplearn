<form action="" method="post">
    <input placeholder="enter your name"  type="text" name="name" id=""/>
    <br/>
    <br/>
    <input placeholder="enter your address" type="text" name="address" id=""/>
    <br/>
    <br/>
    <input placeholder="enter your batch"  type="text" name="batch" id=""/>
    <br/>
    <br/>
    <button type="submit" name="btn" value="insert"> 
        Submit
    </button>
</form>

<?php
 include("./config.php");
 echo"<br/>";
 print_r($_REQUEST);
 if ($_REQUEST["btn"]=="insert") {
     $name=$_REQUEST["name"];
     $address=$_REQUEST["address"];
     $batch=$_REQUEST["batch"];
    $data=$conn->prepare("insert into students values(null,'$name','$address','$batch')");
    $data->execute();
    $result=$data->fetchall();
    echo"Inserted Successfully!!!";
    print_r($result);
 }else{
   
    echo"plese fill all and submit it";
 }

?>