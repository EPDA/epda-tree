<?php
ini_set('display_errors',1);

set_error_handler(function ($errno, $errstr, $errfile, $errline) {
   //throw new ErrorExeption($errstr, 0, $errno, $errfile, $errline); 
	echo "<p>Custom error:[$errno] $errstr</p>";
	echo "error on line $errline in $errfile<br>";
});


$handle = fopen("nope.txt", "r");


echo "<p>Do something else.</p>";