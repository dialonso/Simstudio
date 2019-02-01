<?php
redirect_session('idUser', '/', true);

if(isset($_POST['btn_submit'])) {
    $name = htmlspecialchars($_POST['name']);
    $firstname = htmlspecialchars($_POST['firstname']);
    $email = htmlspecialchars($_POST['email']);
    //$email2 = htmlspecialchars($_POST['email2']);
    $_POST['password'] = trim($_POST['password']);
    $_POST['password2'] = trim($_POST['password2']);
    $password = sha1($_POST['password']);
    $password2 = sha1($_POST['password2']);
    if(!empty($_POST['name']) AND !empty($_POST['firstname']) AND !empty($_POST['email']) AND /* !empty($_POST['email2'])  AND */ !empty($_POST['password']) AND !empty($_POST['password2'])) {

        //if(filter_var($email,FILTER_VALIDATE_EMAIL))
        if(preg_match('#^[a-z0-9._-]{2,}@[a-z0-9._-]{2,}\.(fr|com)$#', $email))
        {
            //if($email == $email2){
                $query = $bdd->prepare("SELECT * from user WHERE email = ?");
                $query->execute(array($email));
                $user = $query->rowCount();

                if($user == 0){

                    if(preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9]).{8,}$#', $_POST['password'])) {

                        if($password == $password2){
                            $insertUser = $bdd->prepare("INSERT INTO user(name,firstname,email,password) VALUES(?,?,?,?)");
                            $insertUser->execute(array($name,$firstname,$email,$password));


							$opt = array(
								'dest' => array(
									'name'	=> $firstname.' '.$name,
									'email'	=> $email
								),
								'subject'	=> 'Insciption à Simstudio',
								'template'	=> array(
									'txt'	=> 'inc/emails/inscriptionConfirm.txt.php',
									'html'	=> 'inc/emails/inscriptionConfirm.html.php'
								),
								'var'		=> array(
									'firstname'	=> $firstname,
									'name'		=> $name,
									'base'		=> BASE
								)
							);
							
							if(send_mail($opt)){
								$alerts['success'][] = "Inscription effectuée avec succès";
							}
							else{
								$alerts['danger'][] = "Erreur lors de l'envoi de l'email";
							}
							header('Location: '.BASE.'/connexion');
                        }else{
                            $alerts['danger'][] = "Les deux mots de passe ne sont pas identiques";
                        }
                    }else{
                        $alerts['danger'][] = "le mot de passe doit comporter 8 caractères avec au moins 1 majuscule et 1 chiffre !";
                    }
                }else{
                    $alerts['danger'][] = "Adresse mail déja prise";
                }
            //}else{
            //    $error = "Les deux emails ne sont pas identiques";
            //}
        }else{
            $alerts['danger'][] = "Adresse mail non valide";
        }
    }else{
        $alerts['danger'][] = "Tous les champs doivent être remplis";
    }
}

//pattern=".{8,}"   required title="8 caracteres minimum"


if(isset($alerts['danger']) && !empty($alerts['danger'])){
	$form = array(
		'email'		=> $email,
		'firstname'	=> $firstname,
		'lastname'	=> $name,
		'password'	=> $_POST['password'],
		'password2'	=> $_POST['password2']
	);
}