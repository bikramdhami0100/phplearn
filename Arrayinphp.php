<?php 
// indexed associative and multidimensional array
//1.indexed array
// $user=["bikram",22 ,"bajhang"];
// echo $user[2]."<br/>";
// for($i=0;$i<=2;$i++){
//     echo $user[$i]."<br/>";
// }
// foreach ($user as $key => $value) {
//      echo $value."<br/>";
// }
// foreach($user as $v){
//     echo $v;
//     echo"<br/>";
// }
//associative array
$arr=["name"=>"bikram dhami","age"=>22, "address"=>"bajhang"];
foreach($arr as $key=>$data){
    echo $key."<br/>";
    // echo $data."<br/>";
    // echo $key .":".$data."<br/>";
}
//multidimensional or 2dimensional array or neasted array



?>