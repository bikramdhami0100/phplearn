<?php
require_once "../include/connection.php";
$id = $_GET['id'];
$sql = "Select * from book where id = $id";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
  $book = $result->fetch_assoc();
  $file_name=$book["photo"];
  // print_r($book["photo"]);
  // die();
}

if (isset($_POST['submit'])) {
if (!empty($_FILES['photo']["name"])) {
  echo "<pre>";
  print_r($_FILES);
  echo "</pre>";
  $file_name = $_FILES['photo']['name'];
  $file_tmp = $_FILES['photo']['tmp_name'];
  $file_type = $_FILES['photo']['type'];
  $file_size = $_FILES['photo']['size'];
  move_uploaded_file($file_tmp, "../assets/bookcover/$file_name");
}else{
  echo "file is not upload";
  $file_name=$book["photo"];
}

print_r($file_name);
  $catagory = $_POST['catagory'];
  $book_title = $_POST['book_title'];
  $isbm = $_POST['isbm'];
  $author = $_POST['author'];
  $pages = $_POST['pages'];
  $copies = $_POST['copies'];
  $price = $_POST['price'];

  $sql = "UPDATE BOOK SET photo='$file_name',category='$category', book_title='$book_title', isbm='$isbm', author='$author', pages='$pages', copies='$copies', price='$price' where id='$id'";
  if ($conn->query($sql) == true) {
    header('Location:../dashboard.php?login=true&select=addbooks');
    exit();
  } else {
    echo 'query error ' . $conn->error;
  }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>form</title>
  <style>
    ::after * {
      padding: 0;
      margin: 0;
      box-sizing: border-box;
    }

    body {
      background-color: aliceblue;

    }

    .container {
      margin: 30px auto;
      text-align: center;
      max-width: 400px;
      width: 50%;
      border: 5px solid #ccc;
      margin: 20px auto;
      padding: 30px;
      background-color: chartreuse;

    }

    h1 {
      font-family: sans-serif;
      display: block;
      font-size: 2rem;
      font-weight: bold;
      text-align: center;
      color: hotpink;
      text-transform: uppercase;
    }

    .title {
      font-size: 40px;

      margin-bottom: 15px;

      text-align: center;
      text-transform: uppercase;
      font-family: red;
      font: bold;
      color: red;
    }

    input[type=submit] {
      border: 3px solid;
      border-radius: 2px;
      display: block;
      font-size: 1em;
      font-weight: bold;
      margin: 1em auto;
      padding: 1em 4em;
      position: relative;
      text-transform: uppercase;
    }

    input[type=submit]:hover {
      color: red;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="title">
      BOOK MODULE</div>
    <form name="BOOK MODULE" action="" method="POST" enctype="multipart/form-data">
      <tr>
        <td><b>CATAGORY:</b></td>
        <td>
          <select name="catagory">
            <option value="History" <?php if ($book['category'] == 'History') {
                                      echo "selected";
                                    } ?>>History</option>
            <option value="Art" <?php if ($book['category'] == 'Art') {
                                  echo "selected";
                                } ?>>Art</option>
            <option value="Mystery" <?php if ($book['category'] == 'Mystery') {
                                      echo "selected";
                                    } ?>>Mystery</option>
            <option value="Technology" <?php if ($book['category'] == 'Technology') {
                                          echo "selected";
                                        } ?>>Technology</option>

          </select>
      </tr><br><br>
      <tr>
        <td><b>BOOK-TITLE:</b></td>
        <td> <input type="text" name="book_title" value="<?php echo $book['book_title']; ?>" required> </td>

      </tr><br><br>
      <tr>
        <td><b>ISBM:</b></td>
        <td> <input type="text" name="isbm" value="<?php echo $book['isbm']; ?>" required> </td>

      </tr> <br><br>
      <tr>
        <td><b>AUTHOR:</b></td>
        <td> <input type="text" name="author" value="<?php echo $book['author']; ?>" required> </td>
        </select>
      </tr> <br><br>
      <tr>
        <td><b>PAGES:</b></td>
        <td> <input type="text" name="pages" value="<?php echo $book['pages']; ?>" required> </td>
      </tr> <br><br>
      <tr>
        <td><b>COPIES:</b></td>
        <td> <input type="text" name="copies" value="<?php echo $book['copies']; ?>" required> </td>
      </tr> <br><br>
      <tr>
        <td><b>PRICE:</b></td>
        <td>
          <input type="text" name="price" value="<?php echo $book['price']; ?>" required>

        </td>
      </tr> <br><br>

      <tr>
        <td><b>PHOTO:</b> </td>
        <td> <input type="file" name="photo" /> </td>
      </tr> <br><br>

      <br>
      <input type="submit" value="submit" name="submit"></br>
      <br>
  </div>
  </form>
</body>

</html>