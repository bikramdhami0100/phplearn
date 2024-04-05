<?php
class One{
    private $name;
   function __set($property,$value){
    if (property_exists($this,$property)) {
        echo "Yes this is exist";
    }else{

        echo " No this property is not exist";
    }

   }
   function meOne(){
     echo "this is bikram";
   }
  
}
 $o=new One();
 $o->name="bikram dhami";
 echo "<br/>";
 $o->meOne();



?>