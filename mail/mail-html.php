<?php
$users = array(
				//0 => array(
					//'email'=>'himanshu.diwakar11@gmail.com',
					//'userName'=>'Himanshu',
					//'amount'=>240,
					//'discount'=>40
				//),
				1 => array(
					'email'=>'nb158f@gmail.com',
					'userName'=>'PHP User',
					'amount'=>440,
					'discount'=>50
				)
		);

foreach($users as $user)
{
	$userName = $user['userName'];
	$amount =  $user['amount'];
	$discount =  $user['discount'];
	$email =  $user['email'];

	$content = file_get_contents('mail-content.html');
	$content = str_replace('[USER]',$userName,$content);
	$content = str_replace('[AMOUNT]',number_format($amount,2),$content);
	$content = str_replace('[DISCOUNT]',number_format($discount,2),$content);

	// To send HTML mail, the Content-type header must be set
	$headers  = 'MIME-Version: 1.0' . "\r\n";
	$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

	$headers .= 'From: Gauri<gauri@example.com>' . "\r\n";
	$headers .= 'Cc: himanshu.diwakar11@gmail.com' . "\r\n";
	$headers .= 'Reply-To: webmaster@example.com' . "\r\n";

	echo $content;
	$a = mail($email,'Hello test bookmyshow mail',$content,$headers);
	var_dump($a);
}

