<?php
include_once("include/connection.php");
$id = $_GET['id'];
$sql = "Select * from students where id = $id";
$result = $conn->query($sql);
if ($result->num_rows >0) {
    $saru = $result->fetch_assoc();
    print_r($saru);

}


 
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            overflow-x: hidden;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .form {
            border: 2px solid rgb(44, 42, 42);
            display: flex;
            flex-direction: column;
            /* font-size: medium; */
            font-weight: 800;
            font-size: x-large;
            width: 550px;
            z-index: 4;
            margin: 4px;
            padding: 14px;
            gap: 10px;
            /* position: absolute; */

        }

        .form input {
            height: 30px;
            border-radius: 3px;
        }

        .imgcon {
            z-index: 0;
            position: absolute;
        }

        .imgcon img {
            object-fit: contain;
            opacity: 0.6;
        }

        .btn {
            height: 40px;
            width: 60px;
        }
    </style>
</head>

<body>

    <div class="container">
        <h1 style="text-align: center; z-index: 4;"><a href="saru.php">Student List</a></h1>
        <div class="imgcon">
            <img src="assets/images/bg.jpg" alt="" srcset="">
        </div>
        <form name="rform" class="form" action="realupdate.php" method="POST" enctype="multipart/form-data">
            <h1>Update Form</h1>
            <div>
                 <input hidden  type="text" name="id" value="<?php echo $id; ?>" >
            </div>
            <div style="display:flex;gap:4px;flex-direction: column;" >
            <div>
                 <img src="assets/images/<?php echo $saru["photo"] ?>" height="100px" width="150px" alt="" srcset="" style="margin-right: 4px;"  >
            </div>
            <div>
                First Name: <input  type="text" name="firstname" value="<?php echo $saru['first_name']?>" >
            </div>
            <div>
                Last Name: <input type="text" name="lastname" value="<?php echo $saru['last_name']?>" >
            </div>
            
            </div>
            <div>
                Enter your Email: <input type="text" name="email" value="<?php echo $saru['email']?>" >
            </div>
            <div>
                Enter your Password: <input type="text" name="password" value="<?php echo $saru['password']?>">
            </div>
            <div>
                Enter your Address: <input type="text" name="address" value="<?php echo $saru['address']?>">
            </div>
            <div>
                Enter your Mobile Number: <input type="text" name="number" value="<?php echo $saru['moblie_number']?>">
            </div>
            <div style="display: flex; gap: 2px;">
                Select your Gender:
                <div style="display: flex; justify-content: center; align-items: center; gap: 2px;" >
                <input type="radio" name="gender" value="male" <?php echo isset($saru['gender']) && $saru['gender'] == 'male' ? 'checked' : ''; ?>> Male
                <input type="radio" name="gender" value="female" <?php echo isset($saru['gender']) && $saru['gender'] == 'female' ? 'checked' : ''; ?>> Female

                </div>
            </div>
            <div>
                Select Program:
                <select name="program">
                <option value= <?php echo isset($saru['program']) && $saru['program'] == 'Cryptography' ? 'selected' : ''; ?>>Cryptography</option>
                <option value= <?php echo isset($saru['program']) && $saru['program'] == 'Java' ? 'selected' : ''; ?>>Java</option>
                <option value= <?php echo isset($saru['program']) && $saru['program'] == 'Php' ? 'selected' : ''; ?>>Php</option>
               <option value=<?php echo isset($saru['program']) && $saru['program'] == 'Research Methodology' ? 'selected' : ''; ?>>Research Methodology</option>

                </select>
            </div>
            <div>
                Select Batch:
                <select name="batch">
                    <option value="2020" >2020</option>
                    <option value="2021">2021</option>
                    <option value="2023">2023</option>
                    <option value="2024">2024</option>
                </select>
            </div>
            <div>
                Select Semester:
                <select name="semester">
                    <option value="Third">Third</option>
                    <option value="Second">Second</option>
                    <option value="Fifth">Fifth</option>
                    <option value="Sixth">Sixth</option>
                </select>
            </div>
            <div>
                Select Profile <input type="file" required name="photo">
            </div>
            <div style="display: flex; justify-content: center; align-items: center;">
                <button style="height: 40px;width: 100px;" type="submit" name="submit" value="submit">Submit</button>
            </div>
        </form>
    </div>
</body>

</html>