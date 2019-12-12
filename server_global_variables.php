<?php

# Super Global Variables for Server Scripting

//$GLOBALS
//
//$_SERVER
//
//$_GET
//
//$_POST
//
//$_FILES
//
//$_COOKIE
//
//$_SESSION
//
//$_REQUEST
//
//$_ENV

echo $_SERVER['SERVER_SOFTWARE'];
echo '<br>';
echo $_SERVER['REMOTE_ADDR'];
echo '<br>';
echo $_SERVER['DOCUMENT_ROOT'];
echo '<br>';
echo $_SERVER['REQUEST_URI'];

echo '<pre>';
print_r($_SERVER);

echo '<pre>';
print_r($_ENV); // shows all OS information (default = false)

?>

