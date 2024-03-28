<?php 
class ConstantDemo{
    const nam = "bikramdhami";
    function displayDemo()  {
        // echo $this->nam;
        echo "this is me";
    }

}

// echo ConstantDemo::nam;
echo"<br/>";
$st=new ConstantDemo();
$st->displayDemo();


?>