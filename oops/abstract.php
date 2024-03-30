<?php 
abstract class Afirst{
    abstract function productDetail();
    abstract function ProductImage();
    function Aone() {
        echo "this is aone funtion";
    }
    
}
class Asecond extends Afirst{
    function productDetail(){
        echo "this is product";
    }
    function ProductImage()  {
         echo "this is product image";
    }
}

// $upload=new Ofirst(); //it's not possible
$upload =new Asecond();
$upload->productDetail();
echo"<br/>";
$upload->ProductImage();
echo"<br/>";
$upload->Aone();
?>