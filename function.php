<?php 
 //basic function in php 
//  function Myfun(){
//     echo"this is bikram dhami";
//  }
//  Myfun();
//  //parameterized function
//  function Myfun1($name,$age){
//     echo"My name is: $name and age is: $age";
//  }
//  Myfun1("bikram dhami",22);
//   //default parameterized function
//   function Myfun2($name,$age=22){
//     echo"My name is: $name and age is: $age";
//  }
//  Myfun2("bikram dhami");
//   //return parameterized function
//   function Myfun3($name,$age){
//     return"My name is: $name and age is: $age";
//  }
//  echo Myfun3("bikram dhami",22);

 // Define callback function
function Myfun4($name, $age) {
    echo "My name is: $name and age is: $age";
}

// Assign the function name to a variable
$test = "Myfun4";

// Define a higher-order function that takes a callback function as an argument
function fun($fun) {
    // Call the callback function with provided arguments
    $fun("dhamiji",22);
}

// Call the higher-order function and pass the callback function name along with required arguments
fun($test);

?>
