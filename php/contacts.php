<?php
/*
|--------------------------------------------------------------------------
| Mailer module
|--------------------------------------------------------------------------
|
| These module are used when sending email from contact form
|
*/



/*SECTION I - CONFIGURATION*/

//$receiver_mail = 'youremail@example.com';
$receiver_mail = 'youremail@example.com';
$mail_title = '[Revoke]';



/*SECTION II - CODE*/

if( !empty($_POST['input-name']) && !empty($_POST['input-mail']) && !empty($_POST['input-message']) ){
        $subject = $mail_title.' message from '.$_POST['input-name'];
	$header = 'From: '.$_POST['input-mail'].'\r\nReply-To: '.$_POST['input-mail'];
	if ( mail($receiver_mail, $subject, $_POST['input-message'], $header) )
		$result = "Your message was successfully sent.";
	else
		$result = "Operation could not be completed.";
}else
{
	$result = "Error processing your request.";
}
//echo $result;
echo "Your message was successfully sent.";
?>
