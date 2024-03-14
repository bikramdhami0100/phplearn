<form action="" method="get">
   <input type="text" name="name"  id="" placeholder="enter cookie"  />
   <br/>
   <br/>
   <button type="submit" name="button" value="set">set cookie</button>
   <br/>
   <br/>
   <button type="submit" name="button" value="get">Get cookie</button>
   <br/>
   <br/>
   <button type="submit" name="button" value="delete">Delete cookie</button>
</form>

<?php  
// echo"<pre>";
// print_r($_REQUEST);
// echo"</pre>";
if (isset($_REQUEST["button"])) {
   if ($_REQUEST["button"]=="set") {
    $value=$_REQUEST["name"];
    setcookie("username",$value,time()+(60*60*24));
   }
   
}else{
    die("failed to get data");
}
if (isset($_REQUEST["button"])) {
    if ($_REQUEST["button"]=="get") {
    
        if(isset($_COOKIE["username"])) {
            print_r($_COOKIE["username"]);
        } else {
            echo "No cookies found.";
        }
     
    }
    
 }else{
     die("failed to get data");
 }

 if (isset($_REQUEST["button"])) {
    if ($_REQUEST["button"]=="delete") {
    
      setcookie("username","",-1);
     
    }
    
 }else{
     die("failed to get data");
 }
?>