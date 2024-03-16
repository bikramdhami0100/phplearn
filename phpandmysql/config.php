
<?php  
$dbHost="localhost";  
$dbName="college";  
$dbUser="root";      //by default root is user name.  
$dbPassword="";     //password is blank by default  
try{  
    $conn= new PDO("mysql:host=$dbHost;dbname=$dbName",$dbUser,$dbPassword);  
    Echo "Successfully connected with college database";  
} catch(Exception $e){  
Echo "Connection failed" . $e->getMessage();  
}  
?>  
