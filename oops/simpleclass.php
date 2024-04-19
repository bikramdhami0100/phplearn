<?php
 class Student{
    public $names;
    function setDetail($name){
        $this->names=$name;

        
    }
    function getDetail(){
       echo $this->names;  
    } 
 }
 $obj=new Student();
 $obj->setDetail("bikram dhami");
 $obj->getDetail();
?>