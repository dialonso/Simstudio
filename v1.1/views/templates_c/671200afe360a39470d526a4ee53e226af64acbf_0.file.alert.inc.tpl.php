<?php
/* Smarty version 3.1.33, created on 2019-01-30 15:00:47
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/alert.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ae0f84c3c7_62805497',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '671200afe360a39470d526a4ee53e226af64acbf' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/alert.inc.tpl',
      1 => 1547733096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c51ae0f84c3c7_62805497 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
if (isset($_smarty_tpl->tpl_vars['alerts']->value)) {
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_8954121495c51ae0f840eb3_31079556', "alerts");
?>

<?php }
}
/* {block "alerts"} */
class Block_8954121495c51ae0f840eb3_31079556 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'alerts' => 
  array (
    0 => 'Block_8954121495c51ae0f840eb3_31079556',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['alerts']->value, 'infos', false, 'type');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['type']->value => $_smarty_tpl->tpl_vars['infos']->value) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['infos']->value, 'info');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['info']->value) {
?>
<div class="alert alert-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
 alert-dismissible fade show my-2" role="alert">
	<strong><?php echo $_smarty_tpl->tpl_vars['alerts_labels']->value[$_smarty_tpl->tpl_vars['type']->value];?>
</strong> : <?php echo $_smarty_tpl->tpl_vars['info']->value;?>

	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
		<span aria-hidden="true">&times;</span>
	</button>
</div>
<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
/* {/block "alerts"} */
}
