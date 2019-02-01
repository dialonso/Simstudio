{extends file="layout.tpl"}

{block name="css"}<link href="css/mesdonnees.css" type="text/css" rel="stylesheet" />{/block}

{block name="main"}
<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			
			{include file="alert.inc.tpl"}
			
			<h1 class="text-center">Mes données</h1>
			
			<form method="post" action="#register" id="myForm" class="mt-4 form-register">
				<div class="form-group ">
					<label class="form_col" for="firstname"> Votre prénom</label><br/>
					<input name="firstname" id="firstname" type="text" size="60" class="form-control" value="{if isset($form.firstname)}{$form.firstname}{/if}" />
				</div>

				<div class="form-group ">
					<label class="form_col" for="lastname"> Votre Nom</label><br />
					<input name="name" id="lastname" type="text"  size="60" class="form-control" value="{if isset($form.lastname)}{$form.lastname}{/if}" >
				</div>

				<div class="form-group ">
					<label class="form_col" for="email"> Email</label><br />
					<input name="email" id="email" type="text" size="60" class="form-control" value="{if isset($form.email)}{$form.email}{/if}" />
				</div>
				
				<div class="form-group ">
					<label class="form_col" for="pwd1">Ancien mot de passe </label><br />
					<input name="oldPassword" id="pwd1" type="password"  size="60"  placeholder="Au moins 6 caractères" class="form-control" />
				</div>

				<div class="form-group ">
					<label class="form_col" for="pwd2">Nouveau mot de passe </label><br />
					<input name="newPassword" id="pwd2" type="password"  size="60"  placeholder="Au moins 6 caractères" class="form-control" />
				</div>

				<div class="form-group ">
					<label class="form_col" for="pwd3"> Confirmer votre nouveau mot de passe <br />
					</label>
					<br/>
					<input name="newPassword2" id="pwd3" type="password" size="60" class="form-control" placeholder="Le mot de passe de confirmation doit être identique à celui d'origine" />
				</div>

				<div class="boutton">
					<button type="submit" class="btn btn-primary" name="btn_submit" value="true">Modifier</button>

					<button type="submit" class="btn btn-danger" name="delete_account" value="true" onclick="return confirm('Etes-vous sûre de supprimer votre compte');">Supprimer mon compte</button>
				</div>
			</form>
		</div>
	</div>
</div>
{/block}