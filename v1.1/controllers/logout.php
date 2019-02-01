<?php
session_destroy();
$_SESSION = null;
setcookie('auth','',time()-1);
unset($_COOKIE['auth']);


header('Location: '.BASE.'/connexion');
