<?php
// check if fields passed are empty
if(empty($_POST['name'])  		||
   empty($_POST['phone']) 		||
   empty($_POST['email']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No existe informacion!";
	return false;
   }
	
$name = $_POST['name'];
$phone = $_POST['phone'];
$email_address = $_POST['email'];
$message = $_POST['message'];
	
// create email body and send it	
$to = 'info@grupolinage.com'; // PUT YOUR EMAIL ADDRESS HERE
$email_subject = "Un posible comprador:  $name"; // EDIT THE EMAIL SUBJECT LINE HERE
$email_body = "Has recibido un correo electronico de tu website's contact form.\n\n"."Aqui estan los detalles:\n\nNombre: $name\n\nTelefono: $phone\n\nEmail: $email_address\n\nMensaje:\n$message";
$headers = "From: noreply@grupolinage.com\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
return true;			
?>