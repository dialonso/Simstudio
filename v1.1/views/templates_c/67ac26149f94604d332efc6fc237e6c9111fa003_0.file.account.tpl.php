<?php
/* Smarty version 3.1.33, created on 2019-01-30 15:00:00
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/account.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ade0d1ff83_00446664',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '67ac26149f94604d332efc6fc237e6c9111fa003' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/account.tpl',
      1 => 1548852906,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:alert.inc.tpl' => 1,
  ),
),false)) {
function content_5c51ade0d1ff83_00446664 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12867456675c51ade0d13345_33395344', "css");
?>

<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16403646115c51ade0d156e7_08456170', "bodyclass");
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5810824245c51ade0d16d53_35068020', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "css"} */
class Block_12867456675c51ade0d13345_33395344 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'css' => 
  array (
    0 => 'Block_12867456675c51ade0d13345_33395344',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
<link href="css/moncompte.css" type="text/css" rel="stylesheet" /><?php
}
}
/* {/block "css"} */
/* {block "bodyclass"} */
class Block_16403646115c51ade0d156e7_08456170 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'bodyclass' => 
  array (
    0 => 'Block_16403646115c51ade0d156e7_08456170',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>
moncompte<?php
}
}
/* {/block "bodyclass"} */
/* {block "main"} */
class Block_5810824245c51ade0d16d53_35068020 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_5810824245c51ade0d16d53_35068020',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container bton">
	
	<?php $_smarty_tpl->_subTemplateRender("file:alert.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
	
	<div class="row boutn align-items-start justify-content-center">
		<div class="col-md-6 pb-2">
			<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/compte/profil" class="btn-link"><button class="btn btn-primary button1 buttonmoncompte ml-md-auto mr-md-2 btn-lg "><h4><strong>MES DONNEES</strong></h4></button></a>
		</div>
		<div class="col-md-6 pb-2">
			<a href="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/" class="btn-link"><button class="btn btn-primary button2 buttonmoncompte ml-md-2 mr-md-2  btn-lg "><h4><strong>MES MODÈLES</strong></h4></button></a>
		</div>
	</div>
</div>
<?php
}
}
/* {/block "main"} */
}
