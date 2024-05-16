<?php
session_start();
include_once("include/connection.php");
$id=$_SESSION["adminid"];
  
if (empty($id)) {
  header("location:index.php?login=false");
}
// if (isset($_GET["id"])) {
//   // $id=$_SESSION["adminid"];
//    $adminsql="select *from admintable where id='$id'";
//    $data=$conn->query($adminsql);
//   if ($data->num_rows>0) {
//      $result=$data->fetch_assoc();
//      print_r($result);
    
//   }
// }
?>
<!-- insert books -->


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</head>
<style>
    *{
        margin:0px;
        padding:0px;
    }
   
    .container{
        display: flex;
        margin:0px;
        padding:0px;
    }
    aside{
        color:white;
        width: 20%;
        background-color: gray;
        min-height: 100vh;
    }
    aside .setdiv{
       font-weight:bold;
       cursor: pointer;
       margin-bottom:4px;
       padding: 6px;
       /* border:2px solid red; */
    }
    main{
        width: 80%;
    }
    .navbar{
      display:flex;
      background:black;
      color:white;
    }
</style>
<body>
<div class="navbar">
<div class="setdiv"><a href="dashboard.php?login=true&select=dashboard">Dashboard</a></div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=addbooks">All books</a></div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=insertbook">Add book</a></div>
          <div class="setdiv"><a href="logout.php?login=true&select=logout">Log Out</a></div>
</div>
  <div class="container">
    <aside>
       <div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=dashboard">Dashboard</a></div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=addbooks">All books</a></div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=insertbook">Add book</a></div>
          <!-- <div  class="setdiv">update book</div> -->

          <!-- <div  class="setdiv">delete book</div> -->
       </div>
   </aside>
     <?php
     
      if (isset($_GET["select"])) {
        if($_GET["select"]=="dashboard"){
               echo "dashbaord";
               echo "<br/>";
               echo $_SESSION["adminid"];
        }
      }
     
      ?>
      <?php
     
     if (isset($_GET["select"])) {
       if($_GET["select"]=="addbooks"){
              include_once("components/book.php");
       }
     }
    
     ?>
        <?php
     
     if (isset($_GET["select"])) {
       if($_GET["select"]=="insertbook"){
              include_once("components/insert.php");
       }
     }
    
     ?>
  </div>  
</body>
</html>