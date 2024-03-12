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
    // echo $key."<br/>";
    // echo $data."<br/>";
    // echo $key .":".$data."<br/>";
}
//multidimensional or 2dimensional array or neasted array

$marr=[
    [1,"bikram",22,"bajhang"],
    [1,"bikram",22,"bajhang"],
    [1,"bikram",22,"bajhang"],
    [1,"bikram",22,"bajhang"]
];
// echo count($marr);
// echo "<pre>";
// print_r($marr);
// echo "</pre>";
// echo"<table border=1> ";
// for ($i=0; $i <count($marr) ; $i++) { 
//     // print_r($marr[$i]);
//     echo"<tr>";
//     for ($j=0; $j <count($marr[$i]) ; $j++) { 
//         echo"<td>";
//        echo $marr[$i][$j];
//        echo"</td>";
//     }
//     echo"</tr>";
// }
// echo "</table>";

//multidimensional associtative array
// $users=[
//     ["name"=>"bikram","age"=>22,"address"=>"bajhang"],
//     ["name"=>"bikram","age"=>22,"address"=>"bajhang"],
//     ["name"=>"bikram","age"=>22,"address"=>"bajhang"],
//     ["name"=>"bikram","age"=>22,"address"=>"bajhang"]
// ];
// echo "<table border=1>";
// foreach($users as $key=>$val){
//     echo "<tr>";
//     echo"<th>";
//     foreach($val as $key1 =>$data){
        
//          echo $key1;
         
//         echo "<td>";
//         echo $data;
//         echo "</td>";
        
//     }
//     echo"</th>";
//     echo "</tr>";
// }
// echo "</table>";
$users = [
    ["name" => "bikram", "age" => 22, "address" => "bajhang"],
    ["name" => "bikram", "age" => 22, "address" => "bajhang"],
    ["name" => "bikram", "age" => 22, "address" => "bajhang"],
    ["name" => "bikram", "age" => 22, "address" => "bajhang"]
];

// Display associative array data in a table
echo "<table border=1>";
// Table headers
echo "<tr>";
foreach ($users[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr>";

// Table data
foreach ($users as $user) {
    echo "<tr>";
    foreach ($user as $data) {
        echo "<td>$data</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>