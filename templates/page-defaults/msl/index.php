<?php

$files1 = scandir(dirname(__FILE__));

$fileList = array();

if ($handle = opendir(dirname(__FILE__))) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "index.php") {
            // echo "$entry\n";
            array_push($fileList, $entry);
        }
    }
    closedir($handle);
}

if (count($fileList) == 1){
    header("Location: ".$fileList[0]);
    exit();
}

echo 'Hello World';
exit();



?>