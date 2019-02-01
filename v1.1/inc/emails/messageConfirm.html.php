<html>
	<head><title>Votre message à Simstudio</title></head>
	<body>
		<h2>Votre message a bien été transmis à Simstudio !</h2>
		<p>Bonjour <b><?php if(isset($var['firstname'])) echo $var['firstname']; else echo 'Prénom'; ?> <?php if(isset($var['name'])) echo $var['name']; else echo 'Nom'; ?></b>, l'équipe Simstudio vous remercie et vous informe que votre message a bien été transmis, et reviendra vers vous pour une réponse dans les plus brefs delais .</p>
		<p>Simstudio est une plateforme web dans laquelle vous pouvez rejoindre une communauté de milliers de scientifiques et developpeurs à travers le monde. </p>
		
		<p>N'hésitez pas à consulter notre <a href='http://simstudio.paysnicolas.fr<?php if(isset($var['base'])) echo $var['base']; ?>/FAQ'>FAQ</a></p>
		<p align='right'>L'équipe Simstudio</p> 
		<div style="margin-top:20px"><img  src='https://simstudio.paysnicolas.fr/v1.1/img/logo-simstudio.jpg' alt="logo simstudio"></div>
		
	</body>
</html>