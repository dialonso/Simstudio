{extends file="layout.tpl"}

{block name="css"}
<link href="css/checkform.css" type="text/css" rel="stylesheet" />
{/block}

{block name="main"}
<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			
			{include file="alert.inc.tpl"}
			
			<form method="post" action="" id="myForm" class="mt-4 form-register">
				<h3 class="my-4 text-center">Creez votre compte</h3>
				
				<div class="form-group">
					<label class="form_col" for="email">Adresse e-mail</label>
					<input name="email" id="email" type="text" class="form-control" value="{if isset($form.email)}{$form.email}{/if}" />
				</div>
				
				<div class="form-group">
					<label class="form_col" for="name"> Votre nom</label>
					<input name="name" id="name" type="text" class="form-control" value="{if isset($form.lastname)}{$form.lastname}{/if}" />
				</div>
				
				<div class="form-group">
					<label class="form_col" for="firstname"> Votre prénom</label>
					<input name="firstname" id="firstname" type="text" class="form-control" value="{if isset($form.firstname)}{$form.firstname}{/if}" />
				</div>

				<div class="form-group">
					<label class="form_col" for="pwd1">Mot de passe </label>
					<input name="password" id="pwd1" type="password"  pattern="{literal}.{8,}{/literal}" placeholder="Au moins 8 caractères" class="form-control" value="{if isset($form.password)}{$form.password}{/if}"" /> 
				</div>
				
				<div class="form-group">
					<label class="form_col" for="pwd2"> Entrez votre mot de passe </label>
					<input name="password2" id="pwd2" type="password" pattern="{literal}.{8,}{/literal}" class="form-control" value="{if isset($form.password2)}{$form.password2}{/if}" />
				</div>
				
				<input type="hidden" name="btn_submit" value="true" />
				
				<span class="form_col"></span>
				<div class="text-center">
					<input type="submit" value="Créez votre compte" class="btn btn-primary btn-register" />
				</div>
				
				<div class="mt-4">
					<div class="text-center">
						<h4 class="pb-2">Déjà inscrit ?</h4>
						<a href="{$base}/connexion"><button class="btn btn-outline-primary btn-login" type="button">Se connecter</button></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
{/block}