<?php
/* Smarty version 3.1.33, created on 2019-01-30 15:00:47
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/profile.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ae0f8142b2_68688899',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b80eab67a14e6586b7684aac67e41db51394f9ea' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/profile.tpl',
      1 => 1548856734,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c51ae0f8142b2_68688899 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3088154645c51ae0f7fa8f3_61281409', "css");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14065497415c51ae0f7fcb55_61092941', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_3088154645c51ae0f7fa8f3_61281409 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_3088154645c51ae0f7fa8f3_61281409',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="css/mesdonnees.css" type="text/css" rel="stylesheet" /><?php
}
}
/* {/block "css"} */
/* {block "main"} */
class Block_14065497415c51ae0f7fcb55_61092941 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_14065497415c51ae0f7fcb55_61092941',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		<div class="col-md-6 offset-md-3">
			
			<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			<h1 class="text-center">Mes données</h1>
			
			<form method="post" action="#register" id="myForm" class="mt-4 form-register">
				<div class="form-group ">
					<label class="form_col" for="firstname"> Votre prénom</label><br/>
					<input name="firstname" id="firstname" type="text" size="60" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['firstname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['firstname'];
}?>" />
				</div>

				<div class="form-group ">
					<label class="form_col" for="lastname"> Votre Nom</label><br />
					<input name="name" id="lastname" type="text"  size="60" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['lastname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['lastname'];
}?>" >
				</div>

				<div class="form-group ">
					<label class="form_col" for="email"> Email</label><br />
					<input name="email" id="email" type="text" size="60" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['email'])) {
echo $_smarty_tpl->tpl_vars['form']->value['email'];
}?>" />
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
<?php
}
}
/* {/block "main"} */
}
