<?php
error_reporting(0);
echo "I am in <strong>".__FILE__ . "</strong> on line <strong>".__LINE__."</strong><hr>";

require_once './../file1.php';

require_once 'dir4/dir5/file3asdfgh.php';

echo "{$a} and {$b} <hr>";
echo test(),"<hr>" ;

require_once './../file1.php';

require_once 'dir4/dir5/file3.php';

require_once './../file1.php';

require_once 'dir4/dir5/file3.php';
