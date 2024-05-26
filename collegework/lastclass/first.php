<?php
 class Rarr{
   private $name;
   private $age;
   private $address;
    function __construct($n,$a,$A){
        $this->name=$n;
        $this->age=$a;
        $this->address=$A;
      
    }
    public function showarr() 
     {
        
        $arr=array("name"=>$this->name,"age"=>$this->age,"address"=> $this->address);
        return $arr;
     }
 }
 $obj=new Rarr("bikram",22,"ktm");
//  print_r($obj->showarr());
$narr=$obj->showarr();
// var_dump($narr)
$jsonnarr=json_encode($narr);
$jsondecodearr=json_decode($jsonnarr);
foreach ($narr as $key => $value) {
    echo "key is : $key and value is : $value \n <br/>";

}

?>


