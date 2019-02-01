<?php
/* Smarty version 3.1.33, created on 2019-01-30 15:00:47
  from '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/footer.inc.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c51ae0fcd1d21_29740765',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a567ab671ec49727fc658005682c0baa817db974' => 
    array (
      0 => '/homepages/21/d737789383/htdocs/simstudio/v1.1/views/templates/footer.inc.tpl',
      1 => 1548853024,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c51ae0fcd1d21_29740765 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, false);
?>
		<footer class="mt-4">
			<ul class="footer-links">
				<li><a href="#CU">Conditions d'utilisation</a></li>
				<li><a href="#Aide">Aide</a></li>
				<li><a href="#Cookies">Cookies</a></li>
				<li><a href="#Donnees">Protection de vos informations personnelles</a></li>
			</ul>
		</footer>	
		<?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"><?php echo '</script'; ?>
>
		<?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['base']->value;?>
/js/main.js"><?php echo '</script'; ?>
>
		<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_5510573785c51ae0fcd0ed9_60320989', "js");
?>

	</body>
</html><?php }
/* {block "js"} */
class Block_5510573785c51ae0fcd0ed9_60320989 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'js' => 
  array (
    0 => 'Block_5510573785c51ae0fcd0ed9_60320989',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block "js"} */
}
