<html>
	<head>
		<title>Title</title>
	</head>
	<body>
		<p><b>Salut � tous</b>, voici un e-mail envoy� par un <i>script PHP</i>.</p>
		
		<p><?php if(isset($var)) echo $var; else echo 'Variable non d�finie'; ?></p>
	</body>
</html>