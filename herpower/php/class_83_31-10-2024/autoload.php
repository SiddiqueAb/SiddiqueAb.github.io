<?php
function myAutoLoader($className)
{
    $fileName = __DIR__ . '/controllers/' . $className . ".php";
    // echo $fileName;
    if (file_exists($fileName)) {
        include_once $fileName;
        // echo "  Loaded";
    } else {
        echo "Class not found: " . $className;
    }
}
spl_autoload_register('myAutoloader');
// myAutoLoader("first");
