{extends file="layout.tpl"}

{block name="main"}
<div class="container">

	<div class="row">
		<div class="col-md-6 offset-md-3">
			
			{include file="alert.inc.tpl"}
			
			<form class="form-horizontal" method="post" action="">
				<h1 class="text-center mb-4">Contactez-nous</h1>
				
				<div class="form-group row">
					<label for="firstname" class="col-sm-2 control-label">Prénom</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="" value="{if isset($form.firstname)}{$form.firstname}{/if}" disabled="disabled" />
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-2 control-label">Nom</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="" value="{if isset($form.name)}{$form.name}{/if}" disabled="disabled" />
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="" value="{if isset($form.email)}{$form.email}{/if}" disabled="disabled" />
					</div>
				</div>
				<div class="form-group row">
					<label for="message" class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="4" name="message">{if isset($form.message)}{$form.message}{/if}</textarea>
					</div>
				</div>
				<div class="form-group">
					<div class="g-recaptcha" data-sitekey="6Lee3osUAAAAAM6VM0VVLkukddfLxCpKv0N3uNDx"> </div>
				</div>
				<div class="form-group">
					<div class="col-sm-10 offset-sm-2">
						<input id="submit" name="btn_submit" type="submit" value="Envoyer" class="btn btn-primary">
					</div>
				</div>
			</form> 
		</div>
	</div>

</div>

{/block}