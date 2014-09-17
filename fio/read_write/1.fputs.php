<?php
# fputs === fwrite

//$handle = fopen('test.txt','a+');
$handle = fopen('test.txt','w+');

fputs($handle, 'Hello 1'.PHP_EOL);
fputs($handle, 'Hello 2'.PHP_EOL);
fputs($handle, 'Hello 3'.PHP_EOL);
fputs($handle, 'Hello 4'.PHP_EOL);
fputs($handle, 'Hello 5'.PHP_EOL);
fwrite($handle, 'World 1'.PHP_EOL);

fclose($handle);
