 <h1>
   <a href="http://localhost/phplearn/collegework/main/RegistrationForm.html">Add Record</a>
 </h1>
<?php

include_once("../include/registrationdbcon.php");
if(isset($_GET["value"])){
    if ($_GET["value"]=="update") {
        echo "<h1 style='color: green; padding: 10px;'>User Update successfully</h1>";
    }
    if ($_GET["value"]=="delete") {
        echo "<h1 style='color: green; padding: 10px;'>User Delete successfully</h1>";
    }
    if ($_GET["value"]=="insert") {
        echo "<h1 style='color: green; padding: 10px;'>User Insert successfully</h1>";
    }
}
$sql = "SELECT * FROM student ORDER BY id DESC";
$result = $connection->query($sql);

if ($result === false) {
    echo "Error: " . $connection->error;
} else {
    if ($result->num_rows > 0) {
        echo "<table border='2px' style='flex-wrap: wrap; border: 1px solid #000;'>";
        // Heading part
        echo "<tr style='border: 1px solid ;'>";
        $row2 = $result->fetch_assoc();
        foreach ($row2 as $key => $value) {      
            echo "<th style='padding: 8px;'>$key</th>";
        }
        echo "<th style='padding: 8px; text-align: center;'>Edit</th>";
        echo "<th style='padding: 8px; text-align: center;'>Delete</th>";
        echo "</tr>";

        // Display data rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr style='border: 1px solid ;'>";
            foreach ($row as $key => $value) { 

              if ($key=="photo") {
                echo "<div style='display: flex ; flex-direction: row; flex-wrap: wrap; width: 100%; height: auto;' ><img src='../assests/images/$value' width='100px' height='100px'/><br/> <p>photo: $value</p>
                
                </div>";
              } 
              echo "<td style='padding: 8px;'>$value</td>";
            }
            // Edit and Delete buttons for each row
            echo "<td> <a href='editUserData.php?id={$row['id']}' onclick='return confirm(\"Do you sure Edit user?\")'>Edit</a> </td>";
            echo "<td> <a href='deleteUserData.php?id={$row['id']}' onclick='return confirm(\"Do you sure Delete user?\")'>Delete</a> </td>";
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No students found.";
    }  
}

$connection->close();

?>
