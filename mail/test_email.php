<?php

$message = "Line 1\r\nLine 2\r\nLine 3";

$message = wordwrap($message, 70, "\r\n");

$flag = mail('nb158f@gmail.com', 'My Subject', $message);
var_dump($flag);
