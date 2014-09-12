<?php

$dir = scandir('./');

echo '<pre>'; 
print_r($dir);

$newDir = 'backup';
if(!is_dir($newDir)) {	
	mkdir($newDir);
}

foreach($dir as $file){
	copy($file,"$newDir/$file");
}
