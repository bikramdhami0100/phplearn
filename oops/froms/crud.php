<?php
  include("./config.php");
  class MyClass {
     public $data;
     function __construct($conn){
         $this->data = $conn;
         $con = $conn->prepare("select * from students");
         $con->execute();
         $result = $con->fetchAll();
         print_r($result);
     }
     function update(){
      $updata = $this->data->prepare("update students set name='updatename', address='updateAddress', batch='updateMorning' where id=5");
      $updata->execute();
      if ($updata) {
         echo "<br/>";
      print_r($updata);
      }else{
         echo "update failed";
      }
    function delete(){
      $deleteData=$this->data->prepare("delete from students where id=5");
      $deleteData->execute();
      if ($deleteData) {
         echo "<br/>";
         print_r($deleteData);
      }else{
         echo "failed to delete";
      }
   }
    }
    function create(){
      $createdata=$this->data->prepare("insert into students values(null,'sunita dhami','Mahendranagar','evening')");
      $createdata->execute();
      if ($createdata) {
         echo "<br/>";
      print_r($createdata);
      }else{
         echo "creation failed";
      }
    }
  }
  $obj = new MyClass($conn);
//   $obj->update();
//   $obj->delete();
//   $obj->create();


  
?>
