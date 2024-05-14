<?php
require_once 'connection.php';

$sql = "CREATE TABLE IF NOT EXISTS saru (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
    first_name VARCHAR(20) NOT NULL,
    last_name VARCHAR(20) NOT NULL,
    address VARCHAR(50),
    email VARCHAR(100),
    moblie_number VARCHAR(15), -- Assuming mobile numbers may contain non-numeric characters like '+'
    gender VARCHAR(20),
    program VARCHAR(50),
    batch VARCHAR(10),
    semester VARCHAR(20),
    password VARCHAR(20),
    photo VARCHAR(20)
)";


if ($conn->query($sql) === TRUE) {
   // echo "Student table created successfully";
} else {
    echo "Query error: " . $conn->error;
}

$createtable="insert into saru values('null','saru')";
if ($conn->query($createtable)===true) {
   // echo "table create successfull ";
    # code...
} else {
    echo "table create failed";
    # code...
}


?>
