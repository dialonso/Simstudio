<html>
	<head>
		<title>Title</title>
	</head>
	<body>
		<p><b>Salut à tous</b>, voici un e-mail envoyé par un <i>script PHP</i>.</p>
		
		<p><?php if(isset($var)) echo $var; else echo 'Variable non définie'; ?></p>
	</body>
</html>