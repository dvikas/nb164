<?php
#print_r(get_defined_vars());

var_dump(isset($a));#bool(false)
$a = null;
var_dump(isset($a));#bool(false)
$a = '';
var_dump(isset($a));#bool(true)
var_dump(empty($a));#bool(true)
$a = 'Hello';
var_dump(empty($a));#bool(false)

unset($a);
var_dump(isset($a));#bool(false)
