<?php

echo "I am in <strong>".__FILE__ . "</strong> on line <strong>".__LINE__."</strong><hr>";

include './../file1.php';

include 'dir4/dir5/file3.php';

echo "{$a} and {$b} <hr>";

include './../file1.php';

include 'dir4/dir5/file3.php';

include './../file1.php';

include 'dir4/dir5/file3.php';
