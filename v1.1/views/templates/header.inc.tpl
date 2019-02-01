<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>{block name="title"}{$page.title}{/block}</title>
        <meta charset="utf-8">
        <meta name="viewport" content="initial-scale=1.0" />
		<meta name="theme-color" content="399CCF">
        {if isset($page.meta_description) && !empty($page.meta_description)}<meta name="description" content="{$page.meta_description}" />{/if}
		{if isset($page.meta_robots) && !empty($page.meta_robots)}<meta name="robots" content="{$page.meta_robots}">{/if}

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
        <link href="{$base}/css/main.css" type="text/css" rel="stylesheet" />
		<script src='https://www.google.com/recaptcha/api.js'></script>
		{if isset($theme)}
		{if $theme eq "flat"}
		<link href="{$base}/css/flat.css" type="text/css" rel="stylesheet" />
		{/if}
		{/if}
		{block name="css"}{/block}
        <link rel="shortcut icon" href="favicon.ico" />
    </head>
    <body class='{block name="bodyclass"}{/block}'>
		<header class="mb-2">
			<div class="container">
				<div class="logo float-left">
					{block name="logo"}<a href="{$base}/"><img src="{$base}/img/logo-simstudio.png" alt="logo simstudio" class="img-fluid" /></a>{/block}
				</div>
				
				<nav class="nav-user float-right">
					{block name="nav-user"}
					<a href="{$base}/compte" class="nav-item"><img src="{$base}/img/picto-account.png" alt="account" title="Mon compte" /></a>
					<a href="{$base}/faq" class="nav-item"><img src="{$base}/img/picto-faq.png" alt="msg" title="FAQ" /></a>
					{if isset($session)}
					<a href="{$base}/contact" class="nav-item"><img src="{$base}/img/picto-mail.png" alt="mail" title="Contact" /></a>
					<a href="{$base}/logout" class="nav-item"><img src="{$base}/img/picto-logout.png" alt="logout" title="Déconnexion" /></a>
					{/if}
					{/block}
				</nav>
				
				<div class="clear"></div>
			</div>
		</header>