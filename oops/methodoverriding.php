<?php
class Teacher {
    public $name="bikram dhami ji";
    function getName() {
        echo "This is teacher name";
    }
}

class Student extends Teacher {
    public $name="bikram dhami ji 2";
  function getName() {
    echo "this is student name";
  }
}

$ob1 = new Student();
$ob1->getName();
echo"<br>";
echo $ob1->name;
?>
