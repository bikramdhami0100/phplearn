
<?php
$id = $_REQUEST["id"];

include_once("../include/registrationdbcon.php");

if (isset($id)) {
    $sql = "SELECT * FROM student WHERE id=$id";
    $result = $connection->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $password = $row["password"];
        $address = $row["address"];
        $mobilenumber = $row["mobilenumber"];
        $gender = $row["gender"];
        $program = $row["program"];

     
        echo '<form id="studentForm" action="" method="post" style="width: 400px; margin: 50px auto; padding: 20px; background-color: rgba(173, 216, 230, 0.8); border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <input type="hidden" name="id" value="'.$id.'">
        First Name: <input type="text" name="updatefirstname" value="'. $firstname.'" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
        Last Name: <input type="text" name="updatelastname" value="'. $lastname.'" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
        Email: <input type="email" name="updateemail" value="'. $email.'" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
        Password: <input type="password" name="updatepassword" value="'. $password.'" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
        Address: <input type="text" name="updateaddress" value="'. $address.'" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
        Mobile Number: <input type="text" name="updatemobilenumber" value="'.$mobilenumber.'" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
        Gender: 
        <select name="updategender" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;">
        <option value="Male"'.($gender === 'Male' ? ' selected' : ''). '>Male</option>
        <option value="Female"'.($gender === 'Female' ? ' selected' : ''). '>Female</option>
            
            <option value="Other"'.($gender === 'Other' ? ' selected' : ''). '>Other</option>
        </select><br>
        Program: <input type="text" name="updateprogram" value="'.$program.'" style="width: 100%; padding: 10px; margin-bottom: 10px; border: 1px solid #ccc; border-radius: 5px;"><br>
        <input type="submit" name="Update" value="Update" style="width: 100%; padding: 10px; background-color: #4CAF50; color: white; border: none; border-radius: 5px; cursor: pointer;">
    </form>
    ';
    } else {
        echo "Student not found.";
    }
} else {
    echo "ID is not passed from the table.";
}

if (isset($_POST["Update"])) {
    $updateid = $_POST["id"];
    $updatefirstname = $_POST["updatefirstname"];
    $updatelastname = $_POST["updatelastname"];
    $updateemail = $_POST["updateemail"];
    $updatepassword = $_POST["updatepassword"];
    $updateaddress = $_POST["updateaddress"];
    $updatemobilenumber = $_POST["updatemobilenumber"];
    $updategender = $_POST["updategender"];
    $updateprogram = $_POST["updateprogram"];

    $updatesql = "UPDATE student SET 
        firstname='$updatefirstname',
        lastname='$updatelastname',
        email='$updateemail',
        password='$updatepassword',
        address='$updateaddress',
        mobilenumber='$updatemobilenumber',
        gender='$updategender',
        program='$updateprogram'
        WHERE id = $updateid";

    if ($connection->query($updatesql)==TRUE) {
        //  print_r($connection);
       
        echo "Data updated successfully!";
        header("location:getvalue.php?value=update");
        // exit();
    } else {
        echo "Error updating data: " . $connection->error;
    }
}else{
    echo "<p style='color:red;'> Please Update Your Data</p>";
}

$connection->close();
?>
