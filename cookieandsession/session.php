<form action="" method="post">
   <input type="text" name="name"  id="" placeholder="enter cookie"  />
   <br/>
   <br/>
   <button type="submit" name="button" value="set">set session</button>
   <br/>
   <br/>
   <button type="submit" name="button" value="get">Get session</button>
   <br/>
   <br/>
   <button type="submit" name="button" value="delete">Delete session</button>
</form>

<?php  
// echo"<pre>";
// print_r($_REQUEST);
// echo"</pre>";
session_start();
if (isset($_REQUEST["button"])) {
   if ($_REQUEST["button"]=="set") {
    $value=$_REQUEST["name"];
    $_SESSION["username"]=$value;
   }
   
}else{
    die("failed to get data");
}
if (isset($_REQUEST["button"])) {
    if ($_REQUEST["button"]=="get") {
    
        if(isset($_SESSION["username"])) {
            print_r($_SESSION["username"]);
        } else {
            echo "No session data found.";
        }
     
    }
    
 }else{
     die("failed to get data");
 }

 if (isset($_REQUEST["button"])) {
    if ($_REQUEST["button"]=="delete") {
    
      session_destroy();
     
    }
    
 }else{
     die("failed to get data");
 }
?>