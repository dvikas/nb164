<?php
$string = 'mAkE iT uPpEr oR LoWeR';

// LowerCase Of string
echo strtolower($string); // make it upper or lower
echo "\n\n";
// UpperCase Of string
echo strtoupper($string); // MAKE IT UPPER OR LOWER
echo "\n\n";
// 1st letter of every word UpperCase Of string
echo ucwords($string); // MAkE IT UPpEr OR LoWeR
echo "\n\n";
// 1st letter UpperCase Of string
echo ucfirst($string); // MAkE iT uPpEr oR LoWeR
echo "\n\n";

echo ucwords(strtolower($string)); // MAkE iT uPpEr oR LoWeR
