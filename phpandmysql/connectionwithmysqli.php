<?php 
$host = "localhost";
$username = "root";
$password = null;
$database = "student";
$connection = new mysqli($host, $username, $password, $database);
if($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
} else {
    echo "Connected successfully !!<br>";
    $sql = "CREATE TABLE person (
      id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
      first_name VARCHAR(20) NOT NULL,
      last_name VARCHAR(20) NOT NULL,
      email VARCHAR(100),
      mobile_number INT(10),
      gender ENUM('male', 'female'),
      program VARCHAR(50),
      batch VARCHAR(10),
      semester INT
      )";
    if ($connection->query($sql) === TRUE) {
        echo "Table student created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
    }
    $connection->close();
}
?>
