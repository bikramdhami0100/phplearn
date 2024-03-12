<?php 
 //basic function in php 
 function Myfun(){
    echo"this is bikram dhami";
 }
 Myfun();
 //parameterized function
 function Myfun($name,$age){
    echo"My name is: $name and age is: $age";
 }
 Myfun("bikram dhami",22);
  //default parameterized function
  function Myfun($name,$age=22){
    echo"My name is: $name and age is: $age";
 }
 Myfun("bikram dhami");
  //return parameterized function
  function Myfun($name,$age){
    return"My name is: $name and age is: $age";
 }
 echo Myfun("bikram dhami",22);
?>
