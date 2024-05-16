<?php
// session_start();
include_once("include/connection.php");

if (isset($_POST['submit'])) {
    $adminid = $_SESSION["adminid"]; // Make sure $_SESSION["adminid"] is set properly
    // print_r($adminid);

    $createtable = "CREATE TABLE IF NOT EXISTS book (
        id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        category VARCHAR(50),
        adminid INT(10) UNSIGNED,
        book_title VARCHAR(100),
        isbm VARCHAR(20),
        author VARCHAR(100),
        pages INT,
        copies INT,
        price DECIMAL(10, 2),
        photo VARCHAR(255),
        FOREIGN KEY (adminid) REFERENCES admintable(adminid))";

     if ($conn->query($createtable) == TRUE) {
        echo "Table created successfully";
     } else {
        echo "Error creating table: " . $conn->error;
     }

    $category = $_POST['catagory']; // Corrected variable name
    $book_title = $_POST['book_title'];
    $isbm = $_POST['isbm'];
    $author = $_POST['author'];
    $pages = $_POST['pages'];
    $copies = $_POST['copies'];
    $price = $_POST['price'];
    
    // Check if photo is uploaded
    if (isset($_FILES['photo']['name'])) {
        $target = './assets/bookcover/';
        $file_name = $_FILES['photo']['name'];
        move_uploaded_file($_FILES['photo']['tmp_name'], $target . $file_name);
    }
    
    $sql = "INSERT INTO book (category, adminid, book_title, isbm, author, pages, copies, price, photo) 
            VALUES ('$category', '$adminid', '$book_title', '$isbm', '$author', '$pages', '$copies', '$price', '$file_name')";
    
    // Debugging line
    // echo $sql;
    
    if ($conn->query($sql) === TRUE) {
        $bookid = $conn->insert_id;
        $_SESSION["bookid"] = $bookid;
        header("location:dashboard.php?login=true&select=addbooks");
        exit();
    } else {
        echo "Query error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <div class="container">
        <form name="BOOK MODULE" action="" method="POST" enctype="multipart/form-data">
            <label for="catagory"><b>CATEGORY:</b></label> <!-- Corrected spelling -->
            <select name="catagory" id="catagory">
                <option value="History">History</option>
                <option value="Art">Art</option>
                <option value="Mystery">Mystery</option>
                <option value="Technology">Technology</option>
            </select>
            <br><br>
            <label for="book_title"><b>BOOK TITLE:</b></label>
            <input type="text" name="book_title" id="book_title">
            <br><br>
            <label for="isbm"><b>ISBN:</b></label> <!-- Corrected spelling -->
            <input type="text" name="isbm" id="isbm">
            <br><br>
            <label for="author"><b>AUTHOR:</b></label> <!-- Corrected spelling -->
            <input type="text" name="author" id="author">
            <br><br>
            <label for="pages"><b>PAGES:</b></label>
            <input type="text" name="pages" id="pages">
            <br><br>
            <label for="copies"><b>COPIES:</b></label>
            <input type="text" name="copies" id="copies">
            <br><br>
            <label for="price"><b>PRICE:</b></label>
            <input type="text" name="price" id="price">
            <br><br>
            <label for="photo"><b>PHOTO:</b></label>
            <input type="file" name="photo" id="photo">
            <br><br>
            <input type="submit" value="submit" name="submit">
        </form>
    </div>
</body>
</html>
