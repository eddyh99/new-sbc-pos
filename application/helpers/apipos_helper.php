<?php
function apisbc($url, $postData = NULL)
{
	$token = "971c5b092526796c856a7ef5993de23733987b3e";

	$ch     = curl_init($url);
	$headers    = array(
		'Authorization: Bearer ' . $token,
		'Content-Type: application/json'
	);

	curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
	curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $postData);
	$result = json_decode(curl_exec($ch));
	curl_close($ch);
	return $result;
}

function send_email($email, $message, $phpmailer)
{
	$mail = $phpmailer;

	$mail->isSMTP();
	$mail->Host         = HOST_EMAIL;
	$mail->SMTPAuth     = true;
	$mail->Username     = USERNAME_EMAIL;
	$mail->Password     = PASS_EMAIL;
	$mail->SMTPAutoTLS  = false;
	$mail->SMTPSecure   = false;
	$mail->Port         = 587;

	$mail->setFrom(USERNAME_EMAIL, NAMETITLE . 'Notification');
	$mail->addReplyTo($email);
	$mail->isHTML(true);

	$mail->ClearAllRecipients();

	$mail->Subject = 'Ask about ' . NAMETITLE;
	$mail->AddAddress('');
	$mail->AddAddress('');

	$mail->msgHTML($message);
	$mail->send();
}
