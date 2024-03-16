<?php
include("./config.php");
$getdata = $conn->prepare("SELECT * FROM students");
$getdata->execute();
$result = $getdata->fetchAll();

echo "<table border='1'>";

// Generate table header dynamically
echo "<thead><tr>";
foreach ($result[0] as $key => $value) {
    echo "<th>$key</th>";
}
echo "</tr></thead>";

echo "<tbody>";
foreach ($result as $data) {
    echo "<tr>";
    foreach ($data as $value) {
        echo "<td>$value</td>";
    }
    echo "</tr>";
}
echo "</tbody>";

echo "</table>";



?>
