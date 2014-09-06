<?php
//for($i=0 ;$i<256 ;$i++)
//echo "\n$i=>".chr($i);

//exit;

// define array
$profile = array(
  "room_num" => "101room",
  "hostel_num" => "9room",
  "roll_num" => "23room",
  "fname" => "Susan",
  "lname" => "Doe",
  "gender" => "female",
  "sector" => "Asset Management"
);
asort($profile);
print_r($profile);
?>
SORTING

SORT by VALUES
===============
sort() [drop keys]
       [ASC on VALUES]

rsort() [drop keys]
        [DESC on VALUES]

asort() [preserve keys]
        [ASC on VALUES]

arsort()[preserve keys]
        [DESC on VALUES]

natsort() [preserve keys]
       [ASC on VALUES]


SORT by KEYS
==============
ksort()[ASC on KEYS]

krsort()[DESC on KEYS]

