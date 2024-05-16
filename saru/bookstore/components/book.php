<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <style>
        /* Table */
        table {
            width: 80%;
            border-collapse: collapse;
        }
        th, td {
            padding: 8px;
            border: 1px solid #ddd;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        /* Links */
        a {
            color: blue;
            text-decoration: none;
        }
        a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
<!-- <h1><a href="http://localhost/PHP2/insert.php">Add User</a></h1> -->

<?php
// require_once "../include/connection.php";
$id=$_SESSION['adminid'];
// echo "$id";
$sql = "SELECT * FROM book where adminid=$id";
$result = $conn->query($sql);
$joinsql="SELECT *FROM book
FULL OUTER JOIN admintable ON book. = Categories.CategoryID";
if ($result->num_rows > 0) {
?>
    <table>
        <tr>
            <th>S.N</th>
            <th>Category</th>
            <th>Book_Title</th>
            <th>Isbm</th>
            <th>Author</th>
            <th>Pages</th>
            <th>Copies</th>
            <th>Price</th>
            <th>Photo</th>
            <th>Edit</th>
            <th>Delete</th>
        </tr>
        <?php
        $i = 1;
        while ($row = $result->fetch_assoc()) {
        ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["category"]; ?></td>
                <td><?php echo $row["book_title"]; ?></td>
                <td><?php echo $row["isbm"]; ?></td>
                <td><?php echo $row["author"]; ?></td>
                <td><?php echo $row["pages"]; ?></td>
                <td><?php echo $row["copies"]; ?></td>
                <td><?php echo $row["price"]; ?></td>
                <td><img src="assets/bookcover/<?php echo $row["photo"]; ?>" height="80px" width="80px"></td>
                <td onclick="return confirm('Are you sure Edit')"> <a href="components/update.php?id=<?php echo $row['id']; ?>">edit</a> </td>
                <td onclick="return confirm('Are you sure Delete')"><a href="components/delete.php?id=<?php echo $row['id'];?>">delete</a></td>
            </tr>
        <?php
            $i++;
        }
        ?>
    </table>

<?php
} else {
    echo "No records found.";
}
?>

</body>
</html>




