<?php
//Automatically includes files containing classes that are called
spl_autoload_register(function ($className) 
{
    //parse out filename where class should be located
    list($filename , $suffix) = explode('_', $className);
    //compose file name
    $file = SERVER_ROOT . '/models/' . strtolower($filename) . '.php';
    //fetch file
    if (file_exists($file)) {
        //get file
        include_once $file;
    } else {
        //file does not exist!
        die("File '$fileName' containing class '$className' not found.");
    }
}
);

// fetch the passed request
$request = $_SERVER['QUERY_STRING'];

//parse the page request and other GET variables
$parsed = explode('&', $request);
//var_dump($parsed);
//the page is the first element
$page = array_shift($parsed);

$getVars = array();
//the rest of the array are get statements, parse them out.
foreach ($parsed as $arg) {
    list($variable, $value) = explode('=', $arg);
    $getVars[$variable] = $value;
}

//compute the path to the file
$target = SERVER_ROOT . '/controllers/' . $page . '.php';

if (file_exists($target)) {
    include_once "$target";

    $class = ucfirst($page) . '_Controller';
    //instantiate the appropriate class
    if (class_exists($class)) {
        $controller = new $class;
    } else {
        die('Class does not exist!');
    }

} else {
    die('page does not exist! Did you include the page/article in the URL?');
}

//once we have the controller instantiated, execute the default function
//pass any GET varaibles to the main method
$controller->main($getVars);