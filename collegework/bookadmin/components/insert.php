<?php 

include_once("../include/connection.php");

if (isset($_POST["btn"])) {
    // Check if photo is uploaded
    if (isset($_FILES["photo"])) {
        $filename = $_FILES["photo"]["name"];
        $tmpname = $_FILES["photo"]["tmp_name"];
        $destination = "../assets/images/" . basename($filename); // Sanitize filename
        if (move_uploaded_file($tmpname, $destination)) {
            echo "File uploaded successfully";
        } else {
            echo "Error uploading file";
            // Handle error appropriately, e.g., exit or continue execution
        }
    } else {
        echo "No file uploaded";
        // Handle error appropriately, e.g., exit or continue execution
    }
   
    // Retrieve other form data
    $title = $_POST["title"];
    $author = $_POST["author"];
    $genre = $_POST["genre"];
    $publication_date = $_POST["publication_date"];
    $price = $_POST["price"];
    $ISBN = $_POST["ISBN"];
    $stock_quantity = $_POST["stock_quantity"];

    // Create table if not exists
    $sqlfortable = "CREATE TABLE IF NOT EXISTS books (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(100) NOT NULL,
        author VARCHAR(100),
        genre VARCHAR(100) NOT NULL,
        publication_date DATE,
        price DECIMAL(10,2) NOT NULL,
        ISBN VARCHAR(20) NOT NULL,
        stock_quantity INT NOT NULL
    )";
    
    if ($connection->query($sqlfortable) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
        exit; // Terminate script execution after error
    }

    // Insert data into the table
    $sqlforinsertvalues = "INSERT INTO books (title, author, genre, publication_date, price, ISBN, stock_quantity) 
    VALUES ('$title', '$author', '$genre', '$publication_date', $price, '$ISBN', $stock_quantity)";
    
    if ($connection->query($sqlforinsertvalues) === TRUE) {
        header("location:../dashboard.php?login=true&id=8&goto=studentlist");
        echo "New record created successfully";
    } else {
        echo "Error inserting record: " . $connection->error;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Book</title>
</head>
<body>
   <div class="wrapper">
    <div ></div>
    <!-- <img src="../assests/background.avif" alt="image"  height="100%"  width="100%"> -->
    <div  class="registrationform">
        <form class="form" enctype="multipart/form-data" action="" method="post" >
            <label for="title">Title:</label>
            <input type="text" name="title" id="title" required>
            <br><br>
            <label for="author">Author:</label>
            <input type="text" name="author" id="author" required>
            <br><br>
            <label for="genre">Genre:</label>
            <input type="text" name="genre" id="genre" required>
            <br><br>
            <label for="publication_date">Publication Date:</label>
            <input type="date" name="publication_date" id="publication_date" required>
            <br><br>
            <label for="price">Price:</label>
            <input type="number" name="price" id="price" step="0.01" required>
            <br><br>
            <label for="ISBN">ISBN:</label>
            <input type="text" name="ISBN" id="ISBN" required>
            <br><br>
            <label for="stock_quantity">Stock Quantity:</label>
            <input type="number" name="stock_quantity" id="stock_quantity" required>
            <br><br>
            <label for="photo">Book Cover:</label>
            <input type="file" name="photo" id="photo" >
            <br><br>
            <button type="submit" name="btn" value="btn">Add Book</button>
        </form>
    </div>
   </div>
</body>
</html>
