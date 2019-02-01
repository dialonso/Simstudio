<?php
/* Smarty version 3.1.33, created on 2019-01-30 15:00:47
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/layout.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ae0fca6dd1_43170779',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '87eff7ade0d546c18823753dcbcff0f2dbbf1aab' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/layout.tpl',
      1 => 1547733097,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.inc.tpl' => 1,
    'file:footer.inc.tpl' => 1,
  ),
),false)) {
function content_5c51ae0fca6dd1_43170779 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
$_smarty_tpl->_subTemplateRender("file:header.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

<main>
<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4135061015c51ae0fca5267_20220481', "main");
?>

</main>

<?php $_smarty_tpl->_subTemplateRender("file:footer.inc.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
/* {block "main"} */
class Block_4135061015c51ae0fca5267_20220481 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'main' => 
  array (
    0 => 'Block_4135061015c51ae0fca5267_20220481',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "main"} */
}
