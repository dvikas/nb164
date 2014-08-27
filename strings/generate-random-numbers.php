<?php
// Requirement :
//  *can use to rename file while uploading
//  *can also use to send system generated password through email while registration.

echo getrandmax(),"\n\n\n";

echo rand();
echo "\n";
// If our range is specific then we can also use
echo rand(1000,9999);
echo "\n uniique Id is : ";
echo uniqid('hello_').' '.rand().' '.rand();
echo "\n uniique Id is : ";
echo strtotime(date('Ymdhis'));
echo "\n Time is : ".date('Y/m/d h:i:s l');
