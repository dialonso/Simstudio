<?php
/* Smarty version 3.1.33, created on 2019-01-30 10:38:13
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/register.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c517085017c92_61145096',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'db7610b0b60ef0460460e0c9f6cd0230162c852e' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/register.tpl',
      1 => 1547767926,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c517085017c92_61145096 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20375314115c517084eee504_02007513', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_1316240185c517084ef14c8_10934189', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_20375314115c517084eee504_02007513 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_20375314115c517084eee504_02007513',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<link href="css/checkform.css" type="text/css" rel="stylesheet" />
<?php
}
}
/* {/block "css"} */
/* {block "main"} */
class Block_1316240185c517084ef14c8_10934189 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_1316240185c517084ef14c8_10934189',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			
			<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			<form method="post" action="" id="myForm" class="mt-4 form-register">
				<h3 class="my-4 text-center">Creez votre compte</h3>
				
				<div class="form-group">
					<label class="form_col" for="email">Adresse e-mail</label>
					<input name="email" id="email" type="text" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['email'])) {
echo $_smarty_tpl->tpl_vars['form']->value['email'];
}?>" />
				</div>
				
				<div class="form-group">
					<label class="form_col" for="name"> Votre nom</label>
					<input name="name" id="name" type="text" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['lastname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['lastname'];
}?>" />
				</div>
				
				<div class="form-group">
					<label class="form_col" for="firstname"> Votre prénom</label>
					<input name="firstname" id="firstname" type="text" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['firstname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['firstname'];
}?>" />
				</div>

				<div class="form-group">
					<label class="form_col" for="pwd1">Mot de passe </label>
					<input name="password" id="pwd1" type="password"  pattern=".{8,}" placeholder="Au moins 8 caractères" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['password'])) {
echo $_smarty_tpl->tpl_vars['form']->value['password'];
}?>"" /> 
				</div>
				
				<div class="form-group">
					<label class="form_col" for="pwd2"> Entrez votre mot de passe </label>
					<input name="password2" id="pwd2" type="password" pattern=".{8,}" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['password2'])) {
echo $_smarty_tpl->tpl_vars['form']->value['password2'];
}?>" />
				</div>
				
				<input type="hidden" name="btn_submit" value="true" />
				
				<span class="form_col"></span>
				<div class="text-center">
					<input type="submit" value="Créez votre compte" class="btn btn-primary btn-register" />
				</div>
				
				<div class="mt-4">
					<div class="text-center">
						<h4 class="pb-2">Déjà inscrit ?</h4>
						<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/connexion"><button class="btn btn-outline-primary btn-login" type="button">Se connecter</button></a>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>
<?php
}
}
/* {/block "main"} */
}
