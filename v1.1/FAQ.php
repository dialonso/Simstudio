<?php
try
{
	$bdd = new PDO('mysql:host=db768248684.hosting-data.io;dbname=db768248684;charset=utf8', 'dbo768248684', 'Simstudio_18');
}
catch (Exception $e)
{
	die('Connexion échouée : ' . $e->getMessage());
}
//$messages = $bdd->query("SELECT * FROM message");
$messages = $bdd->query('SELECT name,firstname,content, message.date FROM message,user WHERE message.idUser=user.idUser AND published =1 ORDER BY date DESC');
//var_dump($messages);

?>

<!DOCTYPE html>
<html>
<head>
  <title>Page Title</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
</head>
<body>
<div class="container">


<div class="jumbotron">
  <h2 class="display-4">FAQ (Frequently Asked Questions) :</h2>

  <?php while($message = $messages->fetch()) { ?>


    <hr class="my-4">
  <strong class="mr-auto"> <?= $message['firstname'].' '.$message['name']; ?> </strong>
  <span align="right">  <?php $date = new DateTime($message['date']); echo $date -> format('Y-m-d'); ?> </span>
  <p class="lead"> <?= $message['content']; ?></p>
  
  <?php } ?>
</div>

  <?= $message['date']; ?>
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>



