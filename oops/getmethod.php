<?php 
class Bik{
//    private  $name="bikram dhami";
public $name="bikram dhami";
    function __get($property){
         echo " $property this is not valid";
    }
}
$one=new Bik();
echo $one->name;
// echo $one->name;
?>