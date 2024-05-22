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
      justify-content:space-between;
      align-items:center;
      background:gray;
      color:white;

    }
    .one{
      display: flex;
      align-items:center;
      gap:20px;
      height:40px;
    }
</style>
<body>
<div class="navbar">
           <div class="one">
          <div class="setdiv"><a href="dashboard.php?login=true&select=dashboard">Dashboard</a></div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=addbooks">All books</a></div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=insertbook">Add book</a></div>
           </div>
          <div class="setdiv"><a href="logout.php?login=true&select=logout">Log Out</a></div>
</div>
  <div class="container">
    <aside>
       <div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=dashboard">Dashboard</a></div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=addbooks">All books</a></div>
          <div class="setdiv"><a href="dashboard.php?login=true&select=insertbook">Add book</a></div>
          <div class="setdiv"><a href="logout.php?login=true&select=logout">Log Out</a></div>
          <!-- <div  class="setdiv">update book</div> -->

          <!-- <div  class="setdiv">delete book</div> -->
       </div>
   </aside>

   <!-- <h1>hello</h1> -->

  
<?php
     
     if (isset($_GET["select"])) {
      if($_GET["select"]=="dashboard"){  
        $sqlforadmin = "select * from admintable where adminid='$id'";
        $sfadmin = $conn->query($sqlforadmin);

        if ($sfadmin->num_rows > 0) {
            $sadmin = $sfadmin->fetch_assoc(); // corrected syntax here
           $adminemail=$sadmin["email"];
            $adminpassword=$sadmin["password"];
            $adminimage=$sadmin["cover"];
            
            // echo "./assets/bookstoreadmin/{$adminimage}'";
            echo "<div>";
            echo "<div style='width:200px; margin-left:22px ;margin-top:35px ;'>";
            echo "<div style='display: flex; align-items: center; justify-content: center; flex-direction: column;'>";
            // echo "<div style='border: 2px solid #ccc; border-radius: 50%; overflow: hidden; width: 150px; height: 150px; margin-bottom: 20px;'>";
            // echo "<img src='assets/bookstoreadmin/{$adminimage}' alt='Admin Image' style='width: 100%; height: 100%; object-fit: cover; border-radius: 50%;'>";
            // echo "</div>";
            echo "<div style='text-align: center;'>";
            echo "<h3>$adminemail</h3>";
            // echo "<p>Password: $adminpassword</p>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
            echo "</div>";
        }
        
?>


     <div style=''>
    <div style='width: 40%;'>
        <form method="post" action=""  style='display: flex; margin-bottom: 10px;'>
            <input type='text' name='query' id='searchQuery' placeholder='Enter your search query' style=' padding: 8px;' onkeyup='performSearch()'>
            <button value="search" name="search" type="submit" style='padding: 8px 15px; background-color: #007bff; color: #fff; border: none; cursor: pointer;' onclick='performSearch()'>Search</button>
        </from>
    </div>
</div>
<?php 
            // echo "dashbaord";
            //  echo "<br/>";
              // print_r($_GET);
            //  echo $_SESSION["adminid"];

        $listsql="select count(id) as totalbook from book" ;
        $res=$conn->query($listsql);
        if ($res->num_rows>0) {
          $listofbook=$res->fetch_assoc();
          // print_r($listofbook);
          $totalbk=$listofbook["totalbook"];
          echo "total book $totalbk";
          echo "<br/>";
          echo "<br/>";
        }
      }
    
    }
// data from search
    if (isset($_POST["search"])) {
      $searchcontent = $_POST["query"];
      $searchsql = "SELECT * FROM book WHERE book_title LIKE '$searchcontent%'";
      $result = $conn->query($searchsql);
      if ($result->num_rows > 0) {
        echo "<div>";
          echo "<table style='border-collapse: collapse; width: 100%;'>";
          echo "<thead>";
          echo "<tr>";
          echo "<th style='border: 1px solid #ccc; padding: 8px;'>Category</th>";
          echo "<th style='border: 1px solid #ccc; padding: 8px;'>Book Name</th>";
          echo "<th style='border: 1px solid #ccc; padding: 8px;'>Price</th>";
          echo "<th style='border: 1px solid #ccc; padding: 8px;'>Image</th>";
          echo "</tr>";
          echo "</thead>";
          echo "<tbody>";
          while ($data = $result->fetch_assoc()) {
              echo "<tr>";
              echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $data["category"] . "</td>";
              echo "<td style='border: 1px solid #ccc; padding: 8px;'>" . $data["book_title"] . "</td>";
              echo "<td style='border: 1px solid #ccc; padding: 8px;'>$" . $data["price"] . "</td>";
              echo "<td style='border: 1px solid #ccc; padding: 8px;'><img src='assets/bookcover/" . $data["photo"] . "' alt='Book Image' style='max-width: 100px; max-height: 100px;'></td>";
              echo "</tr>";
          }
          echo "</tbody>";
          echo "</table>";
          echo "</div>";
      } else {
          echo "<p>No data found for '$searchcontent'</p>";
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