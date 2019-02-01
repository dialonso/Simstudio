<?php
redirect_session('idUser', '/', true);

if(isset($_POST['btn_submit'])) {
    sleep(1);
    if(!empty($_POST['email'])) 
    {
        $email = htmlspecialchars($_POST['email']);
        $email = str_replace(array("\n","\r","%0A" ,PHP_EOL),'',$email);
        if(preg_match('#^[a-z0-9._-]{2,}@[a-z0-9._-]{2,}\.[a-z]{2,}$#', $email))
        {
            $query = $bdd->prepare("SELECT * FROM user WHERE email = ? ");
            $query->execute(array($email));
            $user = $query->rowCount();
            if($user == 1)
            {
                $randomString = generateRandomString(10);
                $randomStringHash = sha1($randomString);
                $query = $bdd->prepare("UPDATE user SET password = ? WHERE email = ? ");
                $query->execute(array($randomStringHash,$email));



                $opt = array(
							'dest' => array(
								//'name'	=> $firstname.' '.$name,
								'email'	=> $email
							),
							'subject'	=> 'Réinitialisation de votre compte Simstudio',
							'template'	=> array(
								'txt'	=> 'inc/emails/passwordConfirm.txt.php',
								'html'	=> 'inc/emails/passwordConfirm.html.php'
							),
							'var'		=> array(
								'randomString'  => $randomString,
								'base'			=> BASE
							)
						);
						
				if(send_mail($opt)){
					$alerts['success'][] = "Un mail vous a été envoyé, vous pouvez vous connecter avec votre nouveau mot de passe. \n Merci de le changer le plus rapidement possible";
				}
				else{
					$alerts['danger'][] = "Erreur lors de l'envoi de l'email";
				}

                header('Location: '.BASE.'/connexion');
            }
            else {
                $error = "cette adresse mail n'est reliée à aucun compte sur Simstudio !";
            }

            
            
        }
        else {
            $error = "Adresse email invalide";
        }

        
    }
    else {
        $error = "Veuillez entrer votre adresse email ";
    }

    

}
