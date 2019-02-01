<?php
	session_start();	// Initialisation de la session
	
	require_once('views/libs/Smarty.class.php');
	
	require_once('inc/configs.php');
	require_once('inc/functions.php');
	
	$bdd = login_db();		// Connexion à la base de données
	verify_cookie();		// Verifie si l'utilisateur à déjà une session via cookie
	
	$smarty = new Smarty();	// Initialisation de Smarty
	
	// Définition de l'environnement (dev ou prod)
	
	if(ENV == 'dev'){
		$smarty->force_compile = true;
		//$smarty->debugging = true;
		$smarty->caching = false;
		
		error_reporting(E_ALL);
		ini_set('display_errors', 1);
	}
	elseif(ENV == 'prod'){
		$smarty->caching = true;
		$smarty->cache_lifetime = 120;
	}
	
	// Définition des répertoires du site
	
	$dir = array(
		'controllers'	=> 'controllers/',
		'views'			=> 'views/',
		'styles'		=> 'css/',
		'javascripts'	=> 'js/',
		'pictures'		=> 'img/'
	);
	
	// Définition des répertoires pour Smarty
	
	$smarty->setTemplateDir($dir['views'].'templates');
	$smarty->setCompileDir($dir['views'].'templates_c');
	$smarty->setConfigDir($dir['views'].'configs');
	$smarty->setCacheDir($dir['views'].'cache');
	
	// Récupération de la route
	
	$path	= parse_url(URL, PHP_URL_PATH);								// Récupère le chemin courrant
	$p		= substr($path, (strlen(BASE)));							// Récupère le slug pour déterminer la route
	
	$page = route($p);													// Récupère les informations de la page par rapport au slug
	
	if($page === false){												// Si le slug n'est associé à aucune page, assigne le template 404
		$page = array(
			'title'		=> 'Not found',
			'template'	=> '404.tpl',
		);
	}
	
	// Assignation du controller
	
	if(isset($page['controller']) && $page['controller'] != null){
		if(file_exists($dir['controllers'].$page['controller']))
			include_once($dir['controllers'].$page['controller']);
		else
			$alerts['warning'] = 'Le controller "'.$page['controller'].'" n\'existe pas.';
	}
	
	// Assignation des alertes
	
	if(isset($alerts)){
		$smarty->assign('alerts', $alerts);
		$smarty->assign('alerts_labels', array(
			'danger'	=> 'Erreur',
			'warning'	=> 'Attention',
			'info'		=> 'Information',
			'success'	=> 'Succès'
		));
	}
	
	// Assignation des variables courrantes
	
	if(!empty($_SESSION)) $smarty->assign('session', true);				// Assigne la session à true si un utilisateur est connecté
	if(isset($form) && !empty($form)) $smarty->assign('form', $form);	// Assign les valeurs d'un formulaire avec erreurs
	
	$smarty->assign('base', BASE);										// Assigne le chemin relatif au site
	$smarty->assign('page', $page);										// Assigne les information de la page courrante
	
	$templateDir = $smarty->getTemplateDir()[0];						// Récupère le chemin des templates (pour les includes)
	$smarty->assign('template_dir', $templateDir);						// Assigne le chemin des templates
	
	
	// --- Theme optionnel ---
	
	$style		= isset($_GET['s']) ? $_GET['s'] : false;	
	
	if($style) $smarty->assign('theme', $style);
	
	// ---
	
	// Affichage du template

	if(file_exists($templateDir.$page['template']))
		$smarty->display($page['template']);
	else
		die('Template not found');