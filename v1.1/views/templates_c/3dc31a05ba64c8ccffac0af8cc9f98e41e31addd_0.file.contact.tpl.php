<?php
/* Smarty version 3.1.33, created on 2019-01-30 14:50:21
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/contact.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ab9d5b77d8_41633328',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3dc31a05ba64c8ccffac0af8cc9f98e41e31addd' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/contact.tpl',
      1 => 1548842404,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c51ab9d5b77d8_41633328 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_21015783095c51ab9d5a2b77_83078342', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "main"} */
class Block_21015783095c51ab9d5a2b77_83078342 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_21015783095c51ab9d5a2b77_83078342',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">

	<div class="row">
		<div class="col-md-6 offset-md-3">
			
			<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
			
			<form class="form-horizontal" method="post" action="">
				<h1 class="text-center mb-4">Contactez-nous</h1>
				
				<div class="form-group row">
					<label for="firstname" class="col-sm-2 control-label">Prénom</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="firstname" name="firstname" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['firstname'])) {
echo $_smarty_tpl->tpl_vars['form']->value['firstname'];
}?>" disabled="disabled" />
					</div>
				</div>
				<div class="form-group row">
					<label for="name" class="col-sm-2 control-label">Nom</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" id="name" name="name" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['name'])) {
echo $_smarty_tpl->tpl_vars['form']->value['name'];
}?>" disabled="disabled" />
					</div>
				</div>
				<div class="form-group row">
					<label for="email" class="col-sm-2 control-label">Email</label>
					<div class="col-sm-10">
						<input type="email" class="form-control" id="email" name="email" placeholder="" value="<?php if (isset($_smarty_tpl->tpl_vars['form']->value['email'])) {
echo $_smarty_tpl->tpl_vars['form']->value['email'];
}?>" disabled="disabled" />
					</div>
				</div>
				<div class="form-group row">
					<label for="message" class="col-sm-2 control-label">Message</label>
					<div class="col-sm-10">
						<textarea class="form-control" rows="4" name="message"><?php if (isset($_smarty_tpl->tpl_vars['form']->value['message'])) {
echo $_smarty_tpl->tpl_vars['form']->value['message'];
}?></textarea>
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

<?php
}
}
/* {/block "main"} */
}
