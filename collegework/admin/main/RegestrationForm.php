
<?php 

include_once("../include/registrationdbcon.php");

if (isset($_POST["btn"])) {
    // Check if photo is uploaded
    if (isset($_FILES["photo"])) {
        $filename = $_FILES["photo"]["name"];
        $tmpname = $_FILES["photo"]["tmp_name"];
        $destination = "../assests/images/" . basename($filename); // Sanitize filename
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
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]); // Consider using more secure hashing algorithm
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $program = $_POST["program"];

    // Create table if not exists
    $sqlfortable = "CREATE TABLE IF NOT EXISTS student (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(20) NOT NULL,
        lastname VARCHAR(20),
        email VARCHAR(50) NOT NULL,
        password VARCHAR(60) NOT NULL, -- Use VARCHAR(60) for password hash
        address VARCHAR(100) NOT NULL,
        mobilenumber VARCHAR(15) NOT NULL,
        gender VARCHAR(10) NOT NULL,
        program VARCHAR(50) NOT NULL,
        photo VARCHAR(100) NOT NULL -- Increase VARCHAR length for photo
    )";
    
    if ($connection->query($sqlfortable) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
        exit; // Terminate script execution after error
    }

    // Insert data into the table
    $sqlforinsertvalues = "INSERT INTO student (firstname, lastname, email, password, address, mobilenumber, gender, program, photo) 
                           VALUES ('$firstName', '$lastName', '$email', '$password', '$address', '$mobile', '$gender', '$program', '$filename')";
         $result=$connection->query($sqlforinsertvalues);
    if ( $result===TRUE) {
        $recently_inserted_id = $connection->insert_id;
        $sqlforselectdata = "SELECT * FROM student WHERE id = $recently_inserted_id";
        $result_select = $connection->query($sqlforselectdata);
        if ($result_select->num_rows > 0) {
            $row = $result_select->fetch_assoc();
           session_start();
           $_SESSION["id"]=$row['id'];
           $_SESSION['email']=$row["email"];
           header("location:../dashboard.php?login=true&id=8&goto=studentlist");
           echo "New record created successfully";
            // Do something with the retrieved data, such as displaying it or storing it in variables
            print_r($row);
        } else {
            echo "No data found for the recently inserted record";
        }
       
       }
        


} 

    // Close database connection
    // $connection->close();

?>



