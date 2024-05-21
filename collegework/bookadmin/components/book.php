
<?php

// require_once "../include/connection.php";
$id=$_SESSION['adminid'];
// echo "$id";
$sql = "SELECT * FROM book where adminid=$id";
$result = $conn->query($sql);

if ($result === false) {
    echo "Error: " . $connection->error;
} else {
    if ($result->num_rows > 0) {
        echo "<div style='width:100%; overflow-x: hidden;'>";
        echo "<div style='overflow-x:scroll; width:100%;'>";
        echo "<table border='2px' style='border-collapse: collapse; width:100%;'>";
        // Heading part
        echo "<tr style='border: 1px solid ;'>";
        $row2 = $result->fetch_assoc();
        foreach ($row2 as $key => $value) {      
            echo "<th style='padding: 8px; border: 1px solid #000;'>$key</th>";
        }
        echo "<th style='padding: 8px; text-align: center; border: 1px solid #000;'>Photo Name</th>";
        echo "<th style='padding: 8px; text-align: center; border: 1px solid #000;'>Edit</th>";
        echo "<th style='padding: 8px; text-align: center; border: 1px solid #000;'>Delete</th>";
        echo "</tr>";

        // Display data rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr style='border: 1px solid ;'>";
            foreach ($row as $key => $value) { 
                if ($key == "photo") {
                    echo "<td style='padding: 8px; border: 1px solid #000;'><img src='./assets/bookcover/$value' width='100px' height='100px'/></td>";
                } else {
                    echo "<td style='padding: 8px; border: 1px solid #000;'>$value</td>";
                }
            }
            // Edit and Delete buttons for each row
            echo "<td style='text-align: center; border: 1px solid #000;'> <a href='./components/update.php?id={$row['id']}&login=true' onclick='return confirm(\"Do you sure Edit user?\")'>Edit</a> </td>";
            echo "<td style='text-align: center; border: 1px solid #000;'> <a href='./components/delete.php?id={$row['id']}&login=true' onclick='return confirm(\"Do you sure Delete user?\")'>Delete</a> </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "No students found.";
    }  
}

// $connection->close();

?>

