
<?php
if (isset($_GET["login"])) {
   if ($_GET["login"]=="true") {
    $id = $_REQUEST["id"];

include_once("../include/registrationdbcon.php");

if (isset($id)) {
    $sql = "SELECT * FROM student WHERE id=$id";
    $result = $connection->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();
        $photo=$row["photo"];
        $destination="../assests/images/$photo";
        $firstname = $row["firstname"];
        $lastname = $row["lastname"];
        $email = $row["email"];
        $password = $row["password"];
        $address = $row["address"];
        $mobilenumber = $row["mobilenumber"];
        $gender = $row["gender"];
        $program = $row["program"];

     
        echo '<form id="studentForm" action="" method="post"  enctype="multipart/form-data" style="width: 400px; margin: 50px auto; padding: 20px; background-color: rgba(173, 216, 230, 0.8); border-radius: 10px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);">
        <img src="'.$destination.'" width="100px" height="100px"/>
        <input type="file" name="photo" id="photo" >
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
    
    // print_r($_POST["photo"]);
    print_r($_FILES["photo"]);
    if (isset($_FILES["photo"])) {
        $filename = $_FILES["photo"]["name"];
        $tmpname = $_FILES["photo"]["tmp_name"];
        $destination = "../assests/images/" . basename($filename); // Sanitize filename
        if (move_uploaded_file($tmpname, $destination)) {

            echo "File uploaded successfully";
        } else {
             $filename=$row["photo"];
            echo "Error uploading file";
            // Handle error appropriately, e.g., exit or continue execution
        }
    } else {
        $filename=$row["photo"];
        echo "No file uploaded";
        // Handle error appropriately, e.g., exit or continue execution
    }
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
        program='$updateprogram',
        photo='$filename'
        WHERE id = $updateid";

    if ($connection->query($updatesql)==TRUE) {
        //  print_r($connection);
       
        echo "Data updated successfully!";
        header("location:../dashboard.php?login=true&id=8&goto=studentlist");
        exit();
    } else {
        echo "Error updating data: " . $connection->error;
    }
}else{
    echo "<p style='color:red;'> Please Update Your Data</p>";
}
$connection->close();
   }else{
    echo "please login first";
   }
}else{
    echo "please login first";
}

?>
