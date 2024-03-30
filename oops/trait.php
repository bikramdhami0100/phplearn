<?php
trait Parent1{
    public function Pone()  {
        echo "this parent one";
    }
}
trait Parent2{
    public function Ptwo()  {
        echo "this parent two";
    }
}
class Child{
    use Parent1;
    use Parent2;
}
$obj1=new Child();
$obj1->Pone();
echo "<br/>";
$obj1->Ptwo();
?>