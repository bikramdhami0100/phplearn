<?php
$arr=["name"=>"bikram","age"=>22,"email"=>"bikramdhami@gmail.com"];
$jsonarr=json_encode($arr);
// echo $jsonarr;
// json deconde 
$jsondata='{"name":"bikram","age":22,"email":"bikramdhami@gmail.com"}';
$newencodedarr=json_decode($jsondata,true);
print_r($newencodedarr);
?>