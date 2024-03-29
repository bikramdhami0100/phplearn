<?php 
class CProduct{
    static public $total=100;
    function GetTotal() {
         echo static::$total;
    }
    // function getAreaName() {
    //      self::getArea();
    // }
    function getAreaName() {
        static::getArea();
   }
    static function getArea() {
        echo "nepal";
    }

}
class Bproduct extends CProduct{
    static public $total=20;
    // function GetTotal()  {
    //     echo self::$total;
    // }
    static function getArea() {
        echo "mahendranagar";
    }
}
// echo CProduct::$total;
$obj=new Bproduct();
$obj->GetTotal();
$obj->getAreaName();

?>