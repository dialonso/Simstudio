<?php
	
	require('inc/recaptcha/autoload.php');

	if(isset($_POST['btn_submit'])){
		$message	= htmlspecialchars($_POST['message']);
		
		if(empty($name))
			$alerts['info'][] = 'Le nom n\'est pas renseigné';
		if(empty($firstname))
			$alerts['info'][] = 'Le prénom n\'est pas renseigné';
		
		if(empty($email))
			$alerts['danger'][] = 'L\'email n\'est pas renseigné';
		elseif(empty($message))
			$alerts['danger'][] = 'Le message est vide';
		elseif(strlen($message) < 10)
			$alerts['danger'][] = "Votre message est trop court !";
		elseif(!isset($_POST['g-recaptcha-response']))
			$alerts['danger'][] = "Recaptcha invalide !";
		else {
			$recaptcha = new \ReCaptcha\ReCaptcha('6Lee3osUAAAAACG2qPH2NEhzixcSe9xds3y10oC3');
			$resp = $recaptcha->verify($_POST['g-recaptcha-response']);
			if (!$resp->isSuccess()) {
				$alerts['danger'][] = "Recaptcha invalide !";
			} else {			
				$addmsg = $bdd->prepare('INSERT INTO messages(idUser,content) VALUES(?,?)');
				$addmsg ->execute(array($_SESSION['idUser'],$message));
				
				$opt = array(
					'dest' => array(
						'name'	=> $firstname.' '.$name,
						'email'	=> $email
					),
					'subject'	=> 'Formulaire de contact Simstudio',
					'template'	=> array(
						'txt'	=> 'inc/emails/messageConfirm.txt.php',
						'html'	=> 'inc/emails/messageConfirm.html.php'
					),
					'var'		=> array(
						'firstname'	=> $firstname,
						'name'		=> $name,
						'base'		=> BASE
					)
				);
				
				if(send_mail($opt)){
					$alerts['success'][] = 'Le message a correctement été envoyé.';
				}
				else{
					$alerts['danger'][] = "Erreur lors de l'envoi de l'email";
				}
			}
		
		if(isset($alerts['danger']) && !empty($alerts['danger'])){
			$form = array(
				'name'		=> $name,
				'firstname'	=> $firstname,
				'email'		=> $email,
				'message'	=> $message
			);
		}
	}
}