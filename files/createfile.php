<form mehod="post" action="">
       <input type="text" name="file" id="" placeholder="enter file name" />
       <br/> 
       <br/>
       <textarea name="textarea" id="" cols="30" rows="10" placeholder="write a content for file " ></textarea>
       <br/> 
       <br/>
       <button type="submit" name="submit" value="one" > Submit</button>

</form>

<?php 
// echo"<pre>";
//  print_r($_REQUEST);
//  echo"</pre>";
 if ($_REQUEST["file"]!=null &&$_REQUEST["textarea"]!=null  ) {
    //   print_r($_REQUEST);
      $fileName=$_REQUEST["file"];
      $content=$_REQUEST["textarea"];
    $file=  fopen("./allfilecreated/".$fileName,"w") or die("file is not open");
    
      fwrite($file,$content);
      fclose($file);
 }else{
    die("please file all field ");
 }
 
?>