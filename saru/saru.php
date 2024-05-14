<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Styled Table</title>
    <style>
        /* Table */
        table {
            width: 5%;
            border-collapse: collapse;
        }
        th, td {
            padding: 2px;
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
<h1><a href="http://localhost/php1/insert.php">Add User</a></h1>

<?php
require_once'connection.php';
if($_GET["success"]){
    if($_GET["success"]=="insert"){
       echo "<h1 style='color:green;'> User Insert Successfully </h1>";
    }
}
$sql = "SELECT * FROM saru ORDER BY id DESC";
$result = $conn->query($sql);
if ($result->num_rows > 0) {?>
    <table>
        <tr>
            <th>S.N</th>
            <th>Name</th>
            <th>Address</th>
            <th>Email</th>
            <th>Mobile Number</th>
            <th>Gender</th>
            <th>Program</th>
            <th>Batch</th>
            <th>Semester</th>
            <th>Password</th>
            <th>photo</th>
            <!-- <th>Action</th> -->
            <th>Edit</th>
            <th>Delete</th>
</tr>
        <?php
        $i = 1;
        while ($row = $result->fetch_assoc()) {
            ?>
            <tr>
                <td><?php echo $i; ?></td>
                <td><?php echo $row["first_name"].' '.$row["last_name"]; ?></td>
                <td><?php echo $row["address"]; ?></td>
                <td><?php echo $row["email"]; ?></td>
                <td><?php echo $row["mobile_number"]; ?></td>
                <td><?php echo $row["gender"]; ?></td>
                <td><?php echo $row["program"]; ?></td>
                <td><?php echo $row["batch"]; ?></td>
                <td><?php echo $row["semester"]; ?></td>
                <td><?php echo $row["password"]; ?></td>
                <td><?php echo $row["photo"]; ?></td>
                <td onclick="return confirm('Are you sure Edit')"> <a href="update.php?id=<?php echo $row['id']; ?>">edit</a> </td>
                <td onclick="return confirm('Are you sure Delete')"><a href="delete.php?id=<?php echo $row['id'];?>">delete</a></td>
                
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












