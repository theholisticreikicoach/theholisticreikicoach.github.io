<?php	
	if(empty($_POST['name_27477']) && strlen($_POST['name_27477']) == 0 || empty($_POST['email_27477']) && strlen($_POST['email_27477']) == 0 || empty($_POST['message_27477']) && strlen($_POST['message_27477']) == 0)
	{
		return false;
	}
	
	$name_27477 = $_POST['name_27477'];
	$email_27477 = $_POST['email_27477'];
	$message_27477 = $_POST['message_27477'];
	$optin_27477 = $_POST['optin_27477'];
	
	$to = 'healinglifetokyo.reiki@gmail.com'; // Email submissions are sent to this email

	// Create email	
	$email_subject = "Message from a Blocs website.";
	$email_body = "You have received a new message. \n\n".
				  "Name_27477: $name_27477 \nEmail_27477: $email_27477 \nMessage_27477: $message_27477 \nOptin_27477: $optin_27477 \n";
	$headers = "MIME-Version: 1.0\r\nContent-type: text/plain; charset=UTF-8\r\n";	
	$headers .= "From: healinglifetokyo.reiki@gmail.com\n";
	$headers .= "Reply-To: $email_27477";	
	
	mail($to,$email_subject,$email_body,$headers); // Post message
	return true;			
?>