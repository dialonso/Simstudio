<html>
	<head>
		<title>Inscription à Simstudio</title>
	</head>
	<body>
		<h2>Bienvenue sur Simstudio !</h2>
		<p>Bonjour <b><?php if(isset($var['firstname'])) echo $var['firstname']; else echo 'Prénom'; ?> <?php if(isset($var['name'])) echo $var['name']; else echo 'Nom'; ?></b>, nous sommes trés heureux de vous accueillir parmi nous.</p>
		<p>Vous venez de rejoindre une communauté de milliers de scientifiques et developpeurs à travers le monde </p>
		
		<p>N'hésitez pas à consulter notre <a href='http://simstudio.paysnicolas.fr<?php if(isset($var['base'])) echo $var['base']; ?>/FAQ'>FAQ</a> ou à nous contacter directement si vous avez des questions</p>
		<img src='https://simstudio.paysnicolas.fr<?php if(isset($var['base'])) echo $var['base']; ?>/img/logo-simstudio.jpg' alt='' />
		<p align="right">L'équipe Simstudio</p>
	</body>
</html>