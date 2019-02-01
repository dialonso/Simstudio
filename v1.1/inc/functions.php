<?php
	function setCookies($cookieName,$time) {
		setcookie($cookieName,$_SESSION['idUser'].'--'.sha1($_SESSION['email'].$_SESSION['password'].$_SERVER['REMOTE_ADDR']),time() + $time,'/','http://simstudio.paysnicolas.fr',false,true);
	}
	
	// Connecte la base de données mysql
	function login_db(){																
		try{ 
			$link = new PDO('mysql:host='.DB_HOST.';dbname='.DB_BASE.';charset=utf8', DB_USER, DB_PASS);
		}
		catch(Exception $e){ 
			die('Erreur : ' . $e->getMessage()); 
		}
		return $link;
	}

	// Récupère les informations de la page courrante par rapport au slug correspondant en base de données
	function route($url){																// Paramètres : slug (chemin post base)
		$return = false;
		
		global $bdd;
		
		$request = 'SELECT *
		FROM page
		WHERE url = :url
		LIMIT 0,1';
		$prepare=$bdd->prepare($request);
		$prepare->bindValue(':url', $url, PDO::PARAM_STR);
		$prepare->execute();
		$results = $prepare->fetchAll(PDO::FETCH_ASSOC);
		
		if(isset($results[0])) $return = $results[0];
		
		return $return;
	}
	
	// Redirige si la session est ouverte/fermée. 
	function redirect_session($name='id', $redirection=BASE.'/', $open=true){			// Paramètres : nom de la session, redirection, ouverte/fermée.
		if(isset($_SESSION[$name]) && $open){
			header('Location: '.BASE.$redirection);
			exit;
		}
		elseif(!isset($_SESSION[$name]) && $open === false){
			header('Location: '.BASE.$redirection);
			exit;
		}
		elseif(!isset($_SESSION[$name]) && $open){
			$alerts['warning'][] = "La session $name n'existe pas.";
		}
	}
	
	// Retourne le contenu d'un fichier PHP (encapsulable dans une variable)
	function file2var($path, $var){															// Paramètres : chemin du fichier
		ob_start();
		include $path; 
		return ob_get_clean();
	}
	
	function send_mail($arg = array()){
		
		$dest_mail =		isset($arg['dest']['email']) ?		$arg['dest']['email'] :		MAIL_DEST;
		$dest_name =		isset($arg['dest']['name']) ?		$arg['dest']['name'] :		NAME_DEST;
		$expe_mail =		isset($arg['expe']['email']) ?		$arg['expe']['email'] :		MAIL_EXPE;
		$expe_name =		isset($arg['expe']['name']) ?		$arg['expe']['name'] :		NAME_EXPE;
		$reply_mail =		isset($arg['reply']['email']) ?		$arg['reply']['email'] :	MAIL_REPL;
		$reply_name =		isset($arg['reply']['name']) ?		$arg['reply']['name'] :		NAME_REPL;
		$subject =			isset($arg['subject']) ?			$arg['subject'] : 			'Objet';
		$templateTXT =		isset($arg['template']['txt']) ?	$arg['template']['txt'] :	'inc/emails/default.txt.php';
		$templateHTML =		isset($arg['template']['html']) ?	$arg['template']['html'] :	'inc/emails/default.html.php';
		$var = 				isset($arg['var']) ?				$arg['var'] :				null;
		
		if (!preg_match("#^[a-z0-9._-]+@(hotmail|live|msn).[a-z]{2,4}$#", $dest_mail))	// On filtre les serveurs qui rencontrent des bogues.
		{
			$passage_ligne = "\r\n";
		}
		else
		{
			$passage_ligne = "\n";
		}
		
		//=====Déclaration des messages au format texte et au format HTML.
		$message_txt = file_exists($templateTXT) ? file2var($templateTXT, $var) : 'Pas de template TXT';
		$message_html = file_exists($templateHTML) ? file2var($templateHTML, $var) : 'Pas de template HTML';
		//==========
		 
		//=====Création de la boundary
		$boundary = "-----=".md5(rand());
		//==========
		 
		//=====Création du header de l'e-mail.
		$header = "From: \"$expe_name\"<$expe_mail>".$passage_ligne;
		$header.= "Reply-to: \"$reply_name\" <$reply_mail>".$passage_ligne;
		$header.= "MIME-Version: 1.0".$passage_ligne;
		$header.= "Content-Type: multipart/alternative;".$passage_ligne." boundary=\"$boundary\"".$passage_ligne;
		//==========
		 
		//=====Création du message.
		$message = $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format texte.
		$message.= "Content-Type: text/plain; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_txt.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary.$passage_ligne;
		//=====Ajout du message au format HTML
		$message.= "Content-Type: text/html; charset=\"ISO-8859-1\"".$passage_ligne;
		$message.= "Content-Transfer-Encoding: 8bit".$passage_ligne;
		$message.= $passage_ligne.$message_html.$passage_ligne;
		//==========
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		$message.= $passage_ligne."--".$boundary."--".$passage_ligne;
		//==========
		 
		//=====Envoi de l'e-mail.
		if(mail($dest_mail,$subject,$message,$header))
			return true;
		else
			return false;
		//==========
	}
	
	function verify_cookie(){
		global $bdd;

		if(isset($_COOKIE['auth']) && !isset($_SESSION['idUser']) ) {
			$auth = $_COOKIE['auth'];
			$auth = explode('--',$auth);
			$user = $bdd->prepare("SELECT * FROM user WHERE idUser = ? ");
			$user->execute(array($auth[0]));
			$userFound = $user->fetch();
			$key = sha1($userFound['email'].$userFound['password'].$_SERVER['REMOTE_ADDR']);
			if($key == $auth[1]) {
				//$_SESSION['Auth'] = (array)$user;
				$_SESSION['idUser'] = $userFound['idUser'];
				$_SESSION['email'] = $userFound['email'];
				$_SESSION['name'] = $userFound['name'];
				$_SESSION['firstname'] = $userFound['firstname'];
				$_SESSION['password'] = $userFound['password'];
				setcookie('auth',$_SESSION['idUser'].'--'.sha1($_SESSION['email'].$_SESSION['password'].$_SERVER['REMOTE_ADDR']),time()+3600*24*30);
			} 
			else {
			 	setcookie('auth',$_SESSION['idUser'].'--'.sha1($_SESSION['email'].$_SESSION['password'].$_SERVER['REMOTE_ADDR']),time()-1);
			}
		}
	}

	function generateRandomString($length = 10) {
		$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}