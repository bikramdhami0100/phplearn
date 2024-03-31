<?php
 class ACompany{
    function getName(){
        echo "AI Erra <br/>";
        return $this;
    }
    function showMe() {
        echo "this is show me function <br/>";
        return $this;
        
    }
    function Ufun() {
        echo "this is ufun function";
    }
 }
 $ac=new Acompany();
 $ac->getName()->showMe()->Ufun();
?>