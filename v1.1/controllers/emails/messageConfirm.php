<?php
$to      = $_SESSION['email'] ;
$subject = 'message à Simstudio';
$message = "<html><head><title>Votre message à Simstudio</title></head>
<body>
	<h2>Votre message a bien été transmis à Simstudio !</h2>
	<p>Bonjour <b>".$_SESSION['firstname']." ".$_SESSION['name']." </b>, l'équipe Simstudio vous remercie et vous informe que votre message a bien été transmis, et reviendra vers vous pour une réponse dans les plus brefs delais .</p>
	<p>Simstudio est une plateforme web dans laquelle vous pouvez rejoindre une communauté de milliers de scientifiques et developpeurs à travers le monde. </p>
	
	<p>N'hésitez pas à consulter notre <a href='http://simstudio.paysnicolas.fr/FAQ'>FAQ</a></p>
	<img src='../pictures/logo.png'>
	<p align='right'>L'équipe Simstudio</p>
</body></html>";

$headers = 'From: postmaster@simstudio.paysnicolas.fr \r\n';
$headers .='Reply-To: simstudio18@gmail.com \r\n';
$headers .='MIME-Version: 1.0';
//$headers .= 'Content-type: multipart/alternative; charset=iso-8859-1';
$headers .='X-Mailer: html/'.phpversion();

chunk_split(base64_encode($message))

var_dump($headers);
var_dump(mail($to, $subject, $message, $headers));