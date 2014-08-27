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


$emails = array_map('quotesTrim',$emails);
$emails = array_filter($emails);
$emails = array_unique($emails);
$emails = array_values($emails);

function quotesTrim($email)
{
  $email = trim($email,'" ');
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email = '';
  }
  return $email;

}


 $email = "clifton@example.com";





//$filterEmails = array();
//foreach($emails as $key=>$value) {
  //$filterEmails[$key]= trim($value,'" ');
//}
var_export($emails);
