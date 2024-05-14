<?php
require_once("include/connection.php");

if (isset($_GET["success"])) {
    if ($_GET["success"] == "insert") {
        echo "<h1 style='color:green;'> User Insert Successfully </h1>";
    }
    if ($_GET["success"] == "update") {
        echo "<h1 style='color:green;'> User Update Successfully </h1>";
    }
    if ($_GET["success"] == "delete") {
        echo "<h1 style='color:green;'> User Delete Successfully </h1>";
    }
}else{
    echo "";
}
echo "<h1><a href='insert.html'> Insert User</a></h1>";
$alluserlistsql = "SELECT * FROM students";
$result = $conn->query($alluserlistsql);

if ($result && $result->num_rows > 0) {
    echo "<table border='2px'>";
    echo "<tr>";
     //for only one data 
    $firstRow = $result->fetch_assoc();
    foreach ($firstRow as $key => $value) {
        // print_r($key);
        echo "<th>$key</th>";
    }echo "<th> Photo Name</th>";
     echo "<th> Edit</th>";
     echo "<th>Delete</th>";
    echo "</tr>";
    //for multiple data
    while ($uservalue = $result->fetch_assoc()) {
        echo "<tr>";
        foreach ($uservalue as $k => $user) {
            if ($k=="photo") {
                 echo "<td> <img src='assets/images/$user' alt='images' width='100px' height='100px'/></td>";
            }
            echo "<td>$user</td>";

            // print_r($k);

        }
        echo "<td onclick=\"return confirm('Are You sure Edit?')\"><a href='update.php?id=".$uservalue['id']."' >Edit</a></td>";
        echo "<td onclick=\"return confirm('Are You sure Delete?')\"><a href='delete.php?id=".$uservalue['id']."' >Delete</a></td>";        
        echo "</tr>";
    }
    echo "</table>";
} else {
    echo "No records found.";
}
?>
