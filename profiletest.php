<?php

$dir_path = "assets/pftestimages";
$extensions_array = array('jpg','png','jpeg','gif');
echo "<link href="/style.css" rel="stylesheet" type="text/css" media="all">";
if(is_dir($dir_path))
{
    $files = scandir($dir_path);
    
    for($i = 0; $i < count($files); $i++)
    {
        if($files[$i] !='.' && $files[$i] !='..')
        {
            // get file name
            echo "File Name -> $files[$i]<br>";
           // check file extension
            if(in_array($extension, $extensions_array))
            {
            // show image
            echo "<img src='$dir_path$files[$i]' style='width:100px;height:100px;'><br>";
            }
        }
    }
}

   echo "<link href="/style.css" rel="stylesheet" type="text/css" media="all">";
