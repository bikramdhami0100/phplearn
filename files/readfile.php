<form action="" method="post" enctype="multipart/form-data" >
    <input type="file" name="files" id=""/>
    <br/>
    <br/>
    <button type="button">All Files</button>
</form>
<?php 
// $fileName="./allfilecreated/bikram.txt";
// $file=fopen($fileName,"r");
// $fileread=fread($file,filesize($fileName));
// fclose($file);
// print_r($fileread);
$path="allfilecreated";
$allfile=scandir($path);
// $afile=unset($allfile[0]);
// $actualfile=array_diff($allfile,array(".",".."));
// print_r($actualfile);
unset($allfile[0]);
unset($allfile[1]);
// $presentPath = dirname(__FILE__); // or __DIR__
// echo $presentPath;

foreach($allfile as $item){
    echo "<a href='/phplearn/files/allfilecreated/$item'>$item</a>" ;
    echo "<br/>";
}

?>

