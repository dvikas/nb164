<?php
# fputs === fwrite

//$handle = fopen('test.txt','a+');
$handle = fopen('test.php','w+');

fputs($handle, "<?php".PHP_EOL);
fputs($handle, "\techo date('Y-m-d');".PHP_EOL);

fclose($handle);
