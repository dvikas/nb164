<?php var_dump(isset($a));//bool(false)$a = "Hello";var_dump(isset($a));// bool(true)unset($a);var_dump(isset($a));//bool(false) echo "<br>========== EMPTY ===========<br>";$b = '';$c = NULL;$d = false;$e = '0';$f = 'hello';var_dump(empty($b));var_dump(empty($c));var_dump(empty($d));var_dump(empty($e));var_dump(empty($f));