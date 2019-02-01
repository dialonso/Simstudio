<?php
/* Smarty version 3.1.33, created on 2019-01-30 15:00:47
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/404.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ae0fc98f93_53770641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3064b3030d87adfd52dbcfaa22dc13cda2101b37' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/404.tpl',
      1 => 1547733096,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c51ae0fc98f93_53770641 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_14602134075c51ae0fc97167_08646854', "main");
$_smarty_tpl->inheritance->endChild($_smarty_tpl, "layout.tpl");
}
/* {block "main"} */
class Block_14602134075c51ae0fc97167_08646854 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_14602134075c51ae0fc97167_08646854',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

<div class="container">
	<div class="not-found text-center">
		<h1>404</h1>

		<h2>La ressource demandée n'existe pas</h2>
	</div>
</div>
<?php
}
}
/* {/block "main"} */
}
