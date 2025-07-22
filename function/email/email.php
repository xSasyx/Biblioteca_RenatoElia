<?php

//Include required PHPMailer files
	require_once 'includes/PHPMailer.php';
	require_once 'includes/SMTP.php';
	require_once 'includes/Exception.php';

//Define name spaces
	use PHPMailer\PHPMailer\PHPMailer;
	use PHPMailer\PHPMailer\SMTP;
	use PHPMailer\PHPMailer\Exception;

	
//Create instance of PHPMailer
	$mail = new PHPMailer();
//Set mailer to use smtp
	$mail->isSMTP();
//Define smtp host
	$mail->Host = "smtp.gmail.com";
//Enable smtp authentication
	$mail->SMTPAuth = true;
//Set smtp encryption type (ssl/tls)
	$mail->SMTPSecure = "tls";
//Port to connect smtp
	$mail->Port = "587";
//Set gmail username
	$mail->Username =  "libreriascolastica0000@gmail.com" ;                       //"Your Gmail Email Address Here";
//Set gmail password
	$mail->Password =   "Libreriascolastica" ;                                            //"Your Gmail Password Here";
//Email subject
	if($t == 1){
	$mail->Subject =     "Scaduto" ;                                         //"Test email using PHPMailer";
	//Set sender email
	$mail->setFrom('libreriascolastica0000@gmail.com');                                         //Sender Email who will send email
	//Enable HTML
	$mail->isHTML(true);
	//Attachment
	//	$mail->addAttachment('img/attachment.png');
	//Email body
	$mail->Body = "<h1>Prenotazione scaduta</h1></br><p>Il libro che avevi prenotato e ritornato disponibile a tutti.</p>";

	$mail->addAddress($em);       
    //Add recipient
	}else{
	$mail->Subject =     "Prenotazione" ;                                         //"Test email using PHPMailer";
	//Set sender email
	$mail->setFrom('libreriascolastica0000@gmail.com');                                         //Sender Email who will send email
	//Enable HTML
	$mail->isHTML(true);
	//Attachment
	//	$mail->addAttachment('img/attachment.png');
	//Email body
	$mail->Body = "<h1>Prenotazione avvenuta con successo</h1></br><p>Grazie per aver prenotato</p>";
	$mail->addAddress($_SESSION['user_id']);                                               //Email of the person who will receive email
	}
//Finally send email
	if ( $mail->send() ) {
		echo "";
	}else{
		echo "Message could not be sent. Mailer Error";
	}
	//Closing smtp connection
	$mail->smtpClose();

	
 

