<?php
	// Evironnement (dev, prod)
	define('ENV',			'dev');
	
	// Website name
	define('NAME',			'Simstudio');
	
	// Base
	define('BASE',			'/v1.1');

	// DB
	define('DB_HOST',		'db768248684.hosting-data.io');
	define('DB_USER',		'dbo768248684');
	define('DB_PASS',		'Simstudio_18');
	define('DB_BASE',		'db768248684');
	
	// Mail
	
	define('MAIL_DEST',		'postmaster@simstudio.paysnicolas.fr');
	define('NAME_DEST',		'Simstudio');
	define('MAIL_EXPE',		'simstudio18@gmail.com');
	define('NAME_EXPE',		'Simstudio');
	define('MAIL_REPL',		'simstudio18@gmail.com');
	define('NAME_REPL',		'Simstudio');
	
	// URL
	define('URL', (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
	
	// IP Address
	define('IP',$_SERVER['REMOTE_ADDR']);
	
	// Locale
	setlocale(LC_TIME, 'fra', 'fr_FR');
	
	// Datetime
	define('DATE',date('Y-m-d H:i:s'));