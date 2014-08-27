<?php
// 4 cases when string is treated as empty

// Case 1
$str = '';
var_dump(empty($str));// output: true

// Case 2
$str = null;
var_dump(empty($str));// output: true

// Case 3
$str = '0';
var_dump(empty($str));// output: true

// Case 4
$str = 123;
unset($str);
var_dump(empty($str));// output: true
