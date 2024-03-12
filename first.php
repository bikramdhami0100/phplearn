<h1>
<?php

for ($i=0; $i <=10 ; $i++) { 
   if($i==5){
      
    goto jump;
   }
   echo $i;
}
jump:
echo"this is last";
 ?>
</h1>
