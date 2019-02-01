{extends file="layout.tpl"}

{block name="css"}<link href="css/moncompte.css" type="text/css" rel="stylesheet" />{/block}
{block name="bodyclass"}moncompte{/block}

{block name="main"}
<div class="container bton">
	
	{include file="alert.inc.tpl"}
	
	<div class="row boutn align-items-start justify-content-center">
		<div class="col-md-6 pb-2">
			<a href="{$base}/compte/profil" class="btn-link"><button class="btn btn-primary button1 buttonmoncompte ml-md-auto mr-md-2 btn-lg "><h4><strong>MES DONNEES</strong></h4></button></a>
		</div>
		<div class="col-md-6 pb-2">
			<a href="{$base}/" class="btn-link"><button class="btn btn-primary button2 buttonmoncompte ml-md-2 mr-md-2  btn-lg "><h4><strong>MES MODÈLES</strong></h4></button></a>
		</div>
	</div>
</div>
{/block}