<?php
/* Smarty version 3.1.33, created on 2019-01-22 14:53:25
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/forgottenpassword.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c472055a427c0_83099477',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b796aaddf23f6bd2bb0efc9044430255acc41690' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/forgottenpassword.tpl',
      1 => 1548164747,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c472055a427c0_83099477 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6899257205c4720559d5e27_97085627', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "main"} */
class Block_6899257205c4720559d5e27_97085627 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_6899257205c4720559d5e27_97085627',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="row">
		<div class="offset-md-3 col-md-6">
			
			<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

			<form method="POST" action="" class="mt-4 form-login">
				    <h3 class="my-4 text-center">Recupération de mot de passe :</h3>
    				<p class="my-4 alert alert-warning text-center" role="alert">Une fois votre adresse email renseigné, un mail vous sera envoyé avec votre nouveau mot de passe qu'il faudra absolument changer au plus vite.</p>
				
				<div class="form-group">
					<label for="email">Adresse mail</label>
					<input type="email" name="email" id="email" class="form-control" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['email'])) {
echo $_smarty_tpl->tpl_vars['form']->value['email'];
}?>" />
				</div>
				
				
				<div class="text-center">
					<button type="submit" class="btn btn-gradient-primary btn-login" name="btn_submit" />Se connecter</button>
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
