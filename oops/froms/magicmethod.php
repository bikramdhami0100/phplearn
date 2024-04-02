<?php
//some important magic method are given below
//__construct, __destruct, __invoke,__set and so on;

class B{
    function Myfun(){
        echo "this is bikram dhami";
    }
    function __invoke()  {
         echo "this is invoke method";
    }
}
$o=new B();
$o();
?>