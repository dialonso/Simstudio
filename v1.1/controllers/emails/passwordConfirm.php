<?php
$to      = $email;
$subject = 'Réinitialisation de votre mot de passe à Simstudio';
$message = '<html><head><title>Réinitialisation de votre mot de passe</title></head>
			<body>
				<p>Bonjour , votre nouveau mot de passe est : '.$randomString.' </p>
				<p>veuillez vous <a href="connexion.php"> connecter</a> à votre compte </p>
				
				<p>N\'hésitez pas à consulter notre <a href="http://simstudio.paysnicolas.fr/FAQ">FAQ</a> ou à nous contacter directement si vous avez des questions</p>
				<img src="../pictures/logo.png">
				<p align="right">L\'équipe Simstudio</p>

			</body>
			</html>';

$headers = 'From: postmaster@simstudio.paysnicolas.fr \r\n';
$headers .='Reply-To: simstudio18@gmail.com \r\n';
$headers .='MIME-Version: 1.0';
//$headers .= 'Content-type: multipart/alternative; charset=iso-8859-1';
$headers .='X-Mailer: html/'.phpversion();
var_dump($headers);
var_dump(mail($to, $subject, $message, $headers));

