<html>
<head>
	<title>Réinitialisation de votre mot de passe</title>
</head>
<body>
	<p>Bonjour , votre nouveau mot de passe est : <?php if(isset($var['randomString'])) echo $var['randomString']; ?> </p>
	<p>veuillez vous <a href="https://simstudio.paysnicolas.fr<?php if(isset($var['base'])) echo $var['base']; ?>/connexion">connecter</a> à votre compte </p>
	<strong>Pour des raisons de sécurité, je vous prie de le changer le plus rapidement possible.</strong>
	
	<p>N\'hésitez pas à consulter notre <a href="https://simstudio.paysnicolas.fr<?php if(isset($var['base'])) echo $var['base']; ?>/FAQ">FAQ</a> ou à nous contacter directement si vous avez des questions</p>
	<img src="https://simstudio.paysnicolas.fr/v1.1/img/logo-simstudio.jpg" alt="logo simstudio">
	<p align="right">L'équipe Simstudio</p>

</body>
</html>
