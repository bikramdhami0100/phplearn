
<?php 
include_once("../include/registrationdbcon.php");

if (isset($_POST["btn"])) {
    $firstName = $_POST["fname"];
    $lastName = $_POST["lname"];
    $email = $_POST["email"];
    $password = md5($_POST["password"]);
    $address = $_POST["address"];
    $mobile = $_POST["mobile"];
    $gender = $_POST["gender"];
    $program = $_POST["program"];

    $sqlfortable = "CREATE TABLE IF NOT EXISTS student (
        id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
        firstname VARCHAR(20) NOT NULL,
        lastname VARCHAR(20),
        email VARCHAR(50) NOT NULL,
        password VARCHAR(32) NOT NULL,
        address VARCHAR(100) NOT NULL,
        mobilenumber VARCHAR(15) NOT NULL,
        gender VARCHAR(10) NOT NULL,
        program VARCHAR(50) NOT NULL
    )";
    
    if ($connection->query($sqlfortable) === TRUE) {
        echo "Table created successfully";
    } else {
        echo "Error creating table: " . $connection->error;
    }

    $sqlforinsertvalues = "INSERT INTO student (firstname, lastname, email, password, address, mobilenumber, gender, program) 
                           VALUES ('$firstName', '$lastName', '$email', '$password', '$address', '$mobile', '$gender', '$program')";
   
   if ($connection->query($sqlforinsertvalues) ===TRUE) {
    echo "New record created successfully";
    header("location:getValue.php?value=insert");
    exit; // Terminate script execution after redirection
} else {
    echo "Error: " . $sqlforinsertvalues . "<br>" . $connection->error;
}

    
    $connection->close();
}
?>

