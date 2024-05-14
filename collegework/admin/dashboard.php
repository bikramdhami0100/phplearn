<?php
session_start();
if (!isset($_SESSION["id"] )) {
   print($_SESSION["id"]);
   header("location:index.php?login=false");
}else{
    
    if (isset($_SESSION["id"])) {
        include_once("include/registrationdbcon.php");
        $id=$_SESSION["id"];
        $sql="select *from student where id=$id";
        $res=$connection->query($sql);
        if ($res->num_rows>0) {
            $result=$res->fetch_assoc();
            
        }
        if (isset($result["id"])) {
            // echo $result["id"];
            $id=$result["id"];
            $name=$result["firstname"];
            $lname=$result["lastname"];
            $email=$result["email"];
            $address=$result["address"];
            $mobilenumber=$result["mobilenumber"];
            $gender=$result["gender"];
            $photoname=$result["photo"];
            $program=$result["program"];
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>student data</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: Arial, sans-serif;
        }

        /* Navbar styles */
        .navbar {
            margin-top:-20px;
            /* position:absolute; */
            
            background-color: #333;
            color: #fff;
            padding: 10px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            min-width:100%;
        }

        .navbar ul {
            list-style-type: none;
            display: flex;
        }

        .navbar ul li {
            margin-right: 20px;
        }

        .navbar ul li a {
            text-decoration: none;
            color: #fff;
        }

        /* Sidebar styles */
        aside{
            font-size:20px;
            background-color: gray;
            font-weight:bold;
            width: 20%;
            min-height: 100vh;
            padding: 20px;
        }

        aside ul {
            list-style-type: none;

        }

        aside ul li {
            cursor: pointer;
            padding:4px;
            margin-bottom: 10px;
        }

        aside ul li a {
            text-decoration: none;
            color: #333;
            display: block;
        }

        main{
            width: 80%;
            height:100%;
            background-color:white;
            /* padding: 20px; */
        }
       .container{
         display: flex;
         
       }
       .logo{
        border:2px solid gray;
        border-radius:50%;
        margin-bottom:10px;

       }
        /* Responsive styles */
        @media screen and (max-width: 768px) {
            
        }
    </style>
</head>
<body>
    <div class="navbar">
        <h1>Student Data</h1>
        <ul>
        <li><a href="http://localhost/phplearn/collegework/admin/dashboard.php?login=true&id=8&goto=dashboard">Dashboard</a></li>

            <li><a href="http://localhost/phplearn/collegework/admin/dashboard.php?login=true&id=8&goto=studentlist">Student List</a></li>
            <li><a href="http://localhost/phplearn/collegework/admin/main/RegistrationForm.html">Add Student</a></li>
            <li><a href="./logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="container">
    <aside>
        <h2><img class="logo" src="assests/images/newbg.jpg" alt="image" width="100px" height="100px" /></h2>
        <ul>
            <li><a href="http://localhost/phplearn/collegework/admin/dashboard.php?login=true&id=8&goto=dashboard">Dashboard</a></li>
            <li><a href="http://localhost/phplearn/collegework/admin/dashboard.php?login=true&id=8&goto=studentlist">Student List</a></li>
            <li><a href="http://localhost/phplearn/collegework/admin/main/RegistrationForm.html">Add Student</a></li>
            <li><a href="./logout.php">Logout</a></li>
        </ul>
    </aside>

    <main class="section">
         <center>
         <h1> Welcome to Dashboard</h1>
         </center>
         <!-- dashboard part -->
         <?php
           if (isset($_GET["goto"])) {
             if ($_GET["goto"]=="dashboard") {
                echo "<div style='background-color: #f4f4f4; padding: 20px; border-radius:4px solid gray; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); border:1px solid gray; margin:4px;'>
                <h2 style='margin-bottom: 10px;'>Information</h2>
                <div> <img src='assests/images/$photoname' width='100px' height='100px' > </div>
                
                <p><strong>ID:</strong> $id</p>
                <p><strong>Name:</strong> $name $lname</p>
                <p><strong>Email:</strong> $email</p>
                <p><strong>Address:</strong> $address</p>
                <p><strong>Mobile Number:</strong> $mobilenumber</p>
                <p><strong>Gender:</strong> $gender</p>
                <p><strong>Program:</strong> $program</p>
            </div>";
             }

            
             
           }
         ?>
          <!--  set up student list -->
          <?php
           if (isset($_GET["goto"])) {
             if ($_GET["goto"]=="studentlist") {
              include_once("main/getvalue.php");
             } 
           }
         ?>

    </main>
    </div>
</body>
</html>
