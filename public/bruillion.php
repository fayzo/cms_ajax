<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$array= array('a','b','c','d','e','f','g');
echo count($array).'<br>';
$result = array_splice($array,1,3);
$result1 = array_splice($array,1);
// $result2 = array_splice($array,3,4);
echo var_dump($result).'<br>';
echo var_dump($result1).'<br>';

$path= 'Blog_nyarwanda_CMS/public/assets/image/users_profile_cover/assets/';
$count = strlen($path).'<br>';
$strpos = substr($path,0,strlen($path)-15).'<br>';
echo $strpos;
// echo substr($path);
echo $count;

// $strpos_countsTo = strpos($path, 'assets/image/users_profile_cover/'.$fileName.'');
// $path_replace= substr_replace($path,'', 0,$strpos_countsTo);

// echo var_dump($result2).'<br>';
?>
    
</body>
</html>