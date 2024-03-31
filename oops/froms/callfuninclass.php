<?php 


class Person{
    function show(string $name)  {
        echo "Name is : $name";
    }
}
$obj=new Person();

// print_r($_POST["text"]!=null);
if ($_POST["text"]!=null) {
   $obj->show($_POST["text"]);
}
?>
<form action="" method="post">
    <input type="text" name="text" id=""/>
    <br/>
    <br/>
    <button type="submit">Submit</button>
</form>