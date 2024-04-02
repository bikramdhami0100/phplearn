<?php
include("./config.php");
class A{
    public $db;
    function __construct($con){
         $this->db=$con;
         $getcol=$this->db->prepare("select * from students");
         $getcol->execute();
         $result=$getcol->fetchAll();
         print_r($result);
         echo "this is connect";
    }
}
$obj=new A($conn);
?>