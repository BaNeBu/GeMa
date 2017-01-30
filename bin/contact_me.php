<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = "gemabudel@kpnmail.nl"; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "GEMA Contact formulier:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Je hebt een nieuw bericht ontvangen vanuit je website gema.site11.com.\n\n"."Hier is de inhoud van het bericht:\n\nNaam: $name\n\nTelefoon: $phone\n\nEmail: $email_address\n\nBericht:\n$message";
$headers = "From: noreply@gema.site11.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
mail("neijssen@hotmail.com","subject","body","From: info@gema.site11.com");
return true;			
?>