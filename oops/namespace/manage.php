<?php
 include("./first.php");
 include("./second.php");
 $f=new rfirst\First();
 $f2=new rsecond\First();
 $f->JoinFirst();
 echo "<br/>";
 $f2->JoinSecond();

 
?>