 
 <h1>
   <a href="http://localhost/phplearn/collegework/admin/main/RegistrationForm.html">Add Record</a>
 </h1>
<?php

// include_once("../include/registrationdbcon.php");
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
if (isset($_GET["login"])) {
   if ($_GET["login"]=="true") {
    $sql = "SELECT * FROM student ORDER BY id DESC";
$result = $connection->query($sql);

if ($result === false) {
    echo "Error: " . $connection->error;
} else {
    if ($result->num_rows > 0) {
      echo "<div style='width:100%;  overflow-x: hidden;' >";
      echo "<div style='overflow-x:scroll;' >";
        echo "<table border='2px'  overflow-x: scroll; style='flex-wrap: wrap; border: 1px solid #000; width:100%;'>";
        // Heading part
        echo "<tr style='border: 1px solid ;width:100%;'>";
        $row2 = $result->fetch_assoc();
        foreach ($row2 as $key => $value) {      
            echo "<th style='padding: 8px;'>$key</th>";
        }
        echo "<th style='padding: 8px; text-align: center;'>Photo Name</th>";
        echo "<th style='padding: 8px; text-align: center;'>Edit</th>";
        echo "<th style='padding: 8px; text-align: center;'>Delete</th>";
        echo "</tr>";

        // Display data rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr style='border: 1px solid ;'>";
            foreach ($row as $key => $value) { 

              if ($key=="photo") {
                echo "<td><img src='assests/images/$value' width='100px' height='100px'/></td>";
              } 
              echo "<td style='padding: 8px;'>$value</td>";
            }
            // Edit and Delete buttons for each row
            echo "<td> <a href='main/editUserData.php?id={$row['id']}&login=true' onclick='return confirm(\"Do you sure Edit user?\")'>Edit</a> </td>";
            echo "<td> <a href='main/deleteUserData.php?id={$row['id']}&login=true' onclick='return confirm(\"Do you sure Delete user?\")'>Delete</a> </td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
        echo "</div>";
    } else {
        echo "No students found.";
    }  
}

   }else{
    echo "please login first";
   }
}else{
  echo "please login first";
}
// $connection->close();

?>
