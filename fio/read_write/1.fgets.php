<?php

$handle = fopen('test.txt','r+');

while( $data = fgets($handle, 100))
{
	echo $data;
}
