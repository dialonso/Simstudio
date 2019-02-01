<?php
redirect_session('idUser', '/', true);

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
        $userData = $query->fetch();
        $_SESSION['idUser'] = $userData['idUser'];
        $_SESSION['email'] = $userData['email'];
        $_SESSION['name'] = $userData['name'];
        $_SESSION['firstname'] = $userData['firstname'];
        $_SESSION['password'] = $userData['password'];
        if(isset($_POST['rememberMe'])) {
          setcookie('auth',$_SESSION['idUser'].'--'.sha1($_SESSION['email'].$_SESSION['password'].$_SERVER['REMOTE_ADDR']),time()+3600*24*30);
        }
        header('Location: '.BASE.'/compte');
		
      }else{
        $alerts['danger'][] = "Email ou mot de passe incorect.";
      }
    }else{
      $alerts['danger'][]	= "Adresse email invalide.";
    }
  }else{
    $alerts['danger'][] = "Tous les champs doivent être remplis.";
  }
  								
}

if(isset($alerts['danger']) && !empty($alerts['danger'])){
	$form = array(
		'email'		=> $email
	);
}
