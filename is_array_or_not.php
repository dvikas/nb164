<?php

# objective : if given input is array then say "Hello" 

//$input = 123;
$input = array();

if(gettype($input) == 'array')
{
	echo "\n Hello User :) \n\n\n";
} else {
	echo "\n Value is not ARRAY :( \n\n\n";
}
echo "\n=================\n";

$input = array();

if(is_array($input))
{
	echo "\n Hello User :) \n\n\n";
} else {
	echo "\n Value is not ARRAY :( \n\n\n";
}
