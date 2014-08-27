<?php

$a = 123;
var_dump(isset($a));
var_dump(empty($a));

var_dump(isset($x));

$m = '';
var_dump(isset($m));
var_dump(empty($m));

unset($m);
var_dump(isset($m));exit;
