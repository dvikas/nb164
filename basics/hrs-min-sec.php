<?php

$inputSec = 5;

$hrs = $inputSec / (60 * 60);

$remainSec = $inputSec % (60 * 60);

$min = $remainSec / 60;
$sec = $remainSec % 60;

printf("%02d Hrs:%02d Min:%02d Sec\n",$hrs,$min,$sec);
