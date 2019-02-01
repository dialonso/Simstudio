<?php
redirect_session('idUser', '/connexion', false);
require('inc/recaptcha/autoload.php');

$form = array(
	'name'		=> $_SESSION['name'],
	'firstname'	=> $_SESSION['firstname'],
	'email'		=> $_SESSION['email']
);

if(isset($_POST['btn_submit']))
{
	$message = htmlspecialchars($_POST['message']);
	if(isset($_POST['g-recaptcha-response']) && isset($_POST['message']))
	{
		if(strlen($message) > 10)
		{
			$recaptcha = new \ReCaptcha\ReCaptcha('6Lee3osUAAAAACG2qPH2NEhzixcSe9xds3y10oC3');
			$resp = $recaptcha->verify($_POST['g-recaptcha-response']);
			if ($resp->isSuccess()) {
				$addmsg = $bdd->prepare('INSERT INTO message(idUser,content) VALUES(?,?)');
				$addmsg ->execute(array($_SESSION['idUser'],$message));
				
				$opt = array(
					'dest' => array(
						'name'	=> $_SESSION['firstname'].' '.$_SESSION['name'],
						'email'	=> $_SESSION['email']
					),
					'subject'	=> 'Votre message à Simstudio',
					'template'	=> array(
						'txt'	=> 'inc/emails/messageConfirm.txt.php',
						'html'	=> 'inc/emails/messageConfirm.html.php'
					),
					'var'		=> array(
						'firstname'	=> $_SESSION['firstname'],
						'name'		=> $_SESSION['name'],
						'base'		=> BASE
					)
				);
				
				if(send_mail($opt)){
					$alerts['success'][] = 'Le message a correctement été envoyé.';
				}
				else{
					$alerts['danger'][] = "Erreur lors de l'envoi de l'email";
				}
			} else {
				$alerts['danger'][] = "Recaptcha invalide !";
			}
		} else {
			$alerts['danger'][] = "Votre message est trop court !";
		}
	}else{
		$alerts['danger'][] = "Tous les champs doivent étre valides !";
	}

}