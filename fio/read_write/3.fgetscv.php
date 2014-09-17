<?php
$handle = fopen('emails.csv','r+');


while($data = fgetcsv($handle,1024))
{
	$emails[] = $data[0];
}

print_r($emails);

$emails = array_map('quotesTrim',$emails);
$emails = array_filter($emails);
$emails = array_unique($emails);
$emails = array_values($emails);
print_r($emails);


function quotesTrim($email)
{
  $email = trim($email,'" ');
  if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    $email = '';
  }
  return $email;

}
