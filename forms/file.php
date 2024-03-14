<?php 

if ($_FILES["image"]) {

    $file = $_FILES["image"]["name"];
    $uplaod="./fileupload/".$file;
    $filename=$_FILES["image"]["tmp_name"];
    move_uploaded_file($filename,$uplaod)   || die("failed to upload !!");

    echo "<img src='./fileupload/$file' style='max-width: 200px; max-height: 200px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);'>";

    
}else{
    die("no any file found !!");
}

?>
