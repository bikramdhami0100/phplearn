<?php
require_once 'connection.php';
$id = $_GET['id'];
$sql = "Select * from saru where id = $id";
$result = $conn->query($sql);
if ($result->num_rows == 1) {
    $saru = $result->fetch_assoc();

    //print_r($saru);
    //die();
}


if (isset($_FILES['photo'])) {
    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";
    $file_name = $_FILES['photo']['name'];
    $file_tmp = $_FILES['photo']['tmp_name'];
    $file_type = $_FILES['photo']['type'];
    $file_size = $_FILES['photo']['size'];
    move_uploaded_file($file_tmp, "upload-image/" . $file_name);
}


if (isset($_POST['submit'])) {
    $Firstname = $_POST['firstname'];
    $Lastname = $_POST['lastname'];
    $Address = $_POST['address'];
    $Moblienumber = $_POST['number'];
    $Password = $_POST['password'];
    $Gender = $_POST['gender'];
    $Email = $_POST['email'];
    $Program = $_POST['program'];
    $Batch = $_POST['batch'];
    $Semester = $_POST['semester'];
   
    $sql = "UPDATE SARU SET first_name='$Firstname', last_name='$Lastname', address='$Address', email='$Email', mobile_number='$Moblienumber', gender='$Gender', program='$Program', batch='$Batch', semester='$Semester' where id='$id'";
    if( $conn->query($sql) == true){
      header('Location:saru.php?success=saru record updated  successfully');
      exit();
    }else{
       echo 'query error '.$conn->error;

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
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }

        body {
            background-color: whitesmoke;

        }

        .container {
            margin: 50px auto;
            text-align: center;
            max-width: 500px;
            width: 100%;
            border: 5px solid #ccc;
            margin: 20px auto;
            padding: 30px;
            background-color: cornsilk;

        }

        .title {
            font-size: 24px;

            margin-bottom: 25px;
            color: #1A33FF;
            text-align: center;
            text-transform: uppercase;
            font-family: sans-serif;
            font: bold;
        }

        form {
            margin: 10px auto;
            padding: 10px;
            width: 100%;
            background: cornsilk
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
            color: #1A33FF;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="title">
            Registration Form
        </div>
        <form name="registration" action="" method="POST" enctype="multipart/form-data">
            <tr>
                <td><b>FirstName:</b></td>
                <input type="text" name="firstname" value="<?php echo $saru['first_name']; ?>" required><br><br>
            </tr>
            <tr>
                <td><b>LastName:</b></td>
                <input type="text" name="lastname" value="<?php echo $saru['last_name']; ?>" required><br><br>
            </tr>
            <tr>
                <td><b>Enter your Email:</b></td>
                <td> <input type="text" name="email" value="<?php echo $saru['email']; ?>" required> </td>
            </tr> <br><br>
            <tr>
                <td><b>Enter your Password:</b></td>
                <td><input type="text" name="password">
            </tr> <br><br>
            <td><b>Enter your Address:</b></td>
            <td> <input type="text" name="address" value="<?php echo $saru['address']; ?>" required> </td>
            </tr> <br><br>
            <tr>
                <td><b>Enter your Mobile Number:</b></td>
                <td> <input type="text" name="number" value="<?php echo $saru['mobile_number']; ?>" required> </td>
            </tr> <br><br>
            <tr>
                <td><b>Select your Gender:</b></td>
                <td>
                    Male <input type="radio" name="gender" value="male" <?php if ($saru['gender'] == 'female') {
                                                                                echo "checked";
                                                                            } ?>>
                    Female <input type="radio" name="gender" value="female" <?php if ($saru['gender'] == 'male') {
                                                                                echo "checked";
                                                                            } ?>>
                </td>
            </tr> <br><br>
            <tr>
                <td><b>Select program:</b></td>
                <td>
                    <select name="program">
                        <option value="C++" <?php if ($saru['program'] == 'C++') {
                                                    echo "selected";
                                                } ?>>C++</option>
                        <option value="JAVA" <?php if ($saru['program'] == 'JAVA') {
                                                    echo "selected";
                                                } ?>>JAVA</option>
                        <option value="PHP" <?php if ($saru['program'] == 'PHP') {
                                                    echo "selected";
                                                } ?>>PHP</option>

                    </select>
                </td>
            </tr><br><br>
            <tr>
                <td><b>Select Batch:</b></td>
                <td>
                    <select name="batch">
                        <option value="2020" <?php if ($saru['batch'] == '2020') {
                                                    echo "selected";
                                                } ?>>2020</option>
                        <option value="2021" <?php if ($saru['batch'] == '2021') {
                                                    echo "selected";
                                                } ?>>2021</option>
                        <option value="2023" <?php if ($saru['batch'] == '2023') {
                                                    echo "selected";
                                                } ?>>2023</option>
                        <option value="2024" <?php if ($saru['batch'] == '2024') {
                                                    echo "selected";
                                                } ?>>2024</option>
                    </select>
                </td>
            </tr><br><br>
            <tr>
                <td><b>Select Semester:</b></td>
                <td>
                    <select name="semester">
                        <option value="Third" <?php if ($saru['semester'] == 'Third') {
                                                    echo "selected";
                                                } ?>>Third</option>
                        <option value="Second" <?php if ($saru['semester'] == 'Second') {
                                                    echo "selected";
                                                } ?>>Second</option>
                        <option value="Fifth" <?php if ($saru['semester'] == 'Fifth') {
                                                    echo "selected";
                                                } ?>>Fifth</option>
                        <option value="Sixth" <?php if ($saru['semester'] == 'Sixth') {
                                                    echo "selected";
                                                } ?>>Sixth</option>
                    </select>
                </td>
            </tr><br><br>
            <tr>
                <td><b>Select your Profile Pic:</b> </td>
                <td> <input type="file" name="photo" /> </td>
            </tr> <br><br>

            <br>
            submit<input type="submit" value="submit" name="submit"></br>
            <br>
    </div>
    </form>
</body>

</html>
