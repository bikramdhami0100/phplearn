<!-- <!DOCTYPE html> -->
<!-- <html lang="en"> -->

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Document</title> -->
    <style>
        .container {
            /* margin-top: 70px; */
            display: flex;
            height:100%;
        }

        .sidebar {
            width: 20%;
            
            /* min-height: 70vh; */
            display:flex;
            flex-direction:column;
            gap:10px;
            background-color: rgb(105, 102, 102);
        }

        .mainbody {
            min-height: 100vh;
            width: 80%;
            background-color: rgb(129, 126, 126);
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="sidebar">
         <a href="http://localhost/phplearn/collegework/admin/component/mainbody.php?id=<?php echo $id;?>">Dashboard</a>
         <a href="http://localhost/phplearn/collegework/admin/component/mainbody.php?value=flogin&click=studentlist">Student List</a>
         <a href="">setting</a>
        </div>
        <div class="mainbody">
<?php
include_once("./include/registrationdbcon.php");

$data=$_GET["id"];
if (isset($_GET["value"])) {
    include_once("../main/getvalue.php");
}
if ($data) {
    $sql="select *from student where id=$data";
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
 if (isset($_GET["click"])) {
     include_once("../main/getvalue.php");
 }
              ?>
             <p> <?php echo "Name : $name $lname" ?></p>
        </div>
    </div>
   
</body>


<!-- </html> -->
