<?php 
trait Acompany{
    function A(){
        echo "this is A company";
    }
}
trait Bcompany{
    function A(){
        echo "this is B company";
    }
}
class ChildCompany{
    use Acompany;
    use Bcompany{
        Acompany::A insteadOf Bcompany;
        Bcompany::A as ABFun;
    }

    // function A()  {
    //     echo "this is Childcomponent ";
    // }
}
$c=new ChildCompany();
$c->A();
echo "<br/>";
$c->ABFun();
?>