<?php
/* Smarty version 3.1.32, created on 2018-10-25 05:54:09
  from '/Users/tantchonta/workspace/pivotech/store-app/admin630rzvsfi/themes/default/template/content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd13e61750262_94406098',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '811310b88ef90fc2911c602fc642b640381bccfe' => 
    array (
      0 => '/Users/tantchonta/workspace/pivotech/store-app/admin630rzvsfi/themes/default/template/content.tpl',
      1 => 1538590499,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd13e61750262_94406098 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="ajax_confirmation" class="alert alert-success hide"></div>
<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }
}
