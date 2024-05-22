<?php 
//report all errors

echo error_reporting(E_ALL);
//report all errors event E_PARSE
echo "<br/>";
echo error_reporting(E_ALL&~E_PARSE);
echo "<br/>";
//reprot E_WARNING and E_NOTICE
echo error_reporting(E_WARNING & E_NOTICE);
echo "<br/>";
//no error report
echo error_reporting(0);
?>