<?php
// Database connection parameters
$host = 'localhost'; // Database host (e.g., localhost)
$dbname = 'jobmilyo'; // Name of the database you want to create
$username = 'root'; // MySQL username
$password = ''; // MySQL password

try {
    // Connect to MySQL server using PDO
    $pdo = new PDO("mysql:host=$host;", $username, $password);
    
    // Set PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    // SQL query to create a new database
    $sql = "CREATE DATABASE IF NOT EXISTS $dbname";
    
    // Execute SQL query
    $pdo->exec($sql);
    
    echo "Database '$dbname' created successfully";
} catch(PDOException $e) {
    // Display error message if connection fails
    echo "Connection failed: " . $e->getMessage();
}
?>
