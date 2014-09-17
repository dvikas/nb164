<?php

$emails = array (
  0 => '  hello1@gmail.com  ',
  1 => '" hello2@gmail.com "',
  11 => 'hello2@gmail.com',
  2 => 'hello3@gmail.com',
  22 => '',
  3 => 'hello4@gmail.com',
  'city' => 'Lucknow',
  4 => '" hello5@gmail.com "',
  44 => '0',
  5 => 'hello6@gmail.com',
  5 => false,
  66 => '  hello7@gmail.com  ',
  6 => null,
  666 => 'hello7@gmail.com',
);

$handle = fopen('emails.csv','w+');

foreach($emails as $email)
fputcsv($handle, array($email));
