<?php

# objective : if given input is integer then say "Hello" 

$input = 123;

if(gettype($input) == 'integer')
{
	echo "\n Hello User :) \n\n\n";
} else {
	echo "\n Value is not INT :( \n\n\n";
}
