<!-- TYPES ARRAY -->
<!--  1. INDEX ARRAY -->
<?php
$fruits = array("Apple", "Banana", "Orange");
echo $fruits[0]."</br>";
echo $fruits[1]."</br>";
echo $fruits[2]."</br>";
?>


<!--   2. ASSOCIATIVE INDEX ARRAY -->
<?php
$marks = array("sagun" => 40, "hari" => 60, "ram"=> 46,"sita"=> 70);
echo $marks["sagun"];
echo"</br>";
echo $marks["hari"];
echo"</br>";
echo $marks["hari"];
echo"</br>";
?>

<!--   3. MULTIDIMENSIONAL ARRAY -->
<?php
$marks = array("saru" => array("science" =>40, "math" => 60, "english" => 50),"sonu" => array("science" =>45, "math" => 65, "english" => 55));
echo $marks["saru"] ["science"];

?>