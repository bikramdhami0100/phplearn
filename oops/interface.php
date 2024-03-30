<?php 
interface Product{
    //we can't use a data member in interface and also we can't write a function body in interface class
//    public  $aname="bikram dhami";
    function Pname();
    function Pdetail();
    // function oneMore()  {
    //     echo "this is me";
    // }
}
class showProduct implements Product{
   function Pname()  {
    echo 'name of product';
   }
   function Pdetail()  {
    echo 'detail of product';
   }
}
$obj=new showProduct();
$obj->Pname();
echo "<br/>";
$obj->Pdetail();

?>