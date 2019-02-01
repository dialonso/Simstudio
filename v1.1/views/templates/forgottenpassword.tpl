{extends file="layout.tpl"}

{block name="main"}
<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			
			{include file="alert.inc.tpl"}

			<form method="POST" action="" class="mt-4 form-login">
				    <h3 class="my-4 text-center">Recupération de mot de passe :</h3>
    				<p class="my-4 alert alert-warning text-center" role="alert">Une fois votre adresse email renseigné, un mail vous sera envoyé avec votre nouveau mot de passe qu'il faudra absolument changer au plus vite.</p>
				
				<div class="form-group">
					<label for="email">Adresse mail</label>
					<input type="email" name="email" id="email" class="form-control" value="{if isset($form.email)}{$form.email}{/if}" />
				</div>
				
				
				<div class="text-center">
					<button type="submit" class="btn btn-gradient-primary btn-login" name="btn_submit" />Se connecter</button>
				</div>
			</form>
			

		</div>
	</div>
</div>
{/block}