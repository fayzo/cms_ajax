<?php 
$dir= new DirectoryIterator("uploads");
// echo print_r($dir);
foreach ($dir as $key => $value) {
    echo $value."<br>";
}
?>