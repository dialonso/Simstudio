<?php
redirect_session('idUser', '/', true);
require('inc/recaptcha/autoload.php');

if(isset($_POST['btn_submit'])) {
	sleep(1);
	$email = htmlspecialchars($_POST['email']);
	$password = trim($_POST['password']);
	$password = sha1($password);
	if(!empty($_POST['email']) AND !empty($_POST['password'])) {
		if(preg_match('#^[a-z0-9._-]{2,}@[a-z0-9._-]{2,}\.[a-z]{2,}$#', $email)) {
			$query = $bdd->prepare("SELECT * FROM user WHERE email = ? AND password = ? ");
			$query->execute(array($email,$password));
			$userFound = $query->rowCount();
			if($userFound == 1){
				$recaptcha = new \ReCaptcha\ReCaptcha('6Lee3osUAAAAACG2qPH2NEhzixcSe9xds3y10oC3');
				$resp = $recaptcha->verify($_POST['g-recaptcha-response']);
				if ($resp->isSuccess()) {
					$userData = $query->fetch();
					$_SESSION['idUser'] = $userData['idUser'];
					$_SESSION['email'] = $userData['email'];
					$_SESSION['name'] = $userData['name'];
					$_SESSION['firstname'] = $userData['firstname'];
					$_SESSION['password'] = $userData['password'];
					if(isset($_POST['rememberMe'])) {
						setcookie('auth',$_SESSION['idUser'].'--'.sha1($_SESSION['email'].$_SESSION['password'].$_SERVER['REMOTE_ADDR']),time()+3600*24*30);
					}
					header('Location: '.BASE.'/');
				}else {
					$alerts['danger'][] = 'aer';
				}

			}else{
				$alerts['danger'][] = "Email ou mot de passe incorect.";
			}
		}else{
			$alerts['danger'][]	= "Adresse email invalide.";
		}
	}else{
		$alerts['danger'][] = "Tous les champs doivent étre remplis.";
	}							
}

if(isset($alerts['danger']) && !empty($alerts['danger'])){
	$form = array(
		'email'		=> $email
	);
}
