{extends file="layout.tpl"}

{block name="main"}
<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			
			{include file="alert.inc.tpl"}

			<form method="POST" action="" class="mt-4 form-login">
				<h3 class="my-4 text-center">Identifiez-vous</h3>
				
				<div class="form-group">
					<label for="email">Adresse mail</label>
					<input type="email" name="email" id="email" class="form-control" value="{if isset($form.email)}{$form.email}{/if}" />
				</div>
				
				<div class="form-grou mb-4">
					<label for="password">Mot de passe</label>
					<input type="password" name="password" id="password" class="form-control" />
				</div>
				
				<div class="form-group mb-2">
					<input type="checkbox" name="showpassword" id="showpassword" />
					<label for="showpassword">Afficher le mot de passe</label>
				</div>
				
				<div class="form-group">
					<input type="checkbox" name="rememberMe" id="rememberMe" />
					<label for="rememberMe">Maintenir la session ouverte</label>
				</div> 
				
				<div class="text-center">
					<button type="submit" class="btn btn-gradient-primary btn-login" name="btn_submit">Se connecter</button>
				</div>
			</form>
			
			<div class="mt-4">
				<div class="text-center">
					<h4 class="pb-2">Nouveau sur SimStudio ?</h4>
					<a href="{$base}/inscription" ><button class="btn btn-outline-primary btn-register">Créez votre compte</button></a>
				</div>
			</div>
		</div>
	</div>
</div>
{/block}

{block name="js"}
<script type= text/javascript>
$(document).ready(function(){
	$('#showpassword').change(function() {
		if($('#password').prop('type') == 'password') {
			$('#password').prop('type','text');
		}else {
			$('#password').prop('type','password');
		}
	});
});
</script>
{/block}