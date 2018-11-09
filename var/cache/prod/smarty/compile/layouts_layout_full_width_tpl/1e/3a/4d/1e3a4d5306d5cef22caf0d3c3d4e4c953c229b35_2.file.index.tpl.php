<?php
/* Smarty version 3.1.32, created on 2018-10-25 17:27:12
  from '/Users/tantchonta/workspace/pivotech/store-app/themes/classic/templates/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd1e0d0e2bc77_30753722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1e3a4d5306d5cef22caf0d3c3d4e4c953c229b35' => 
    array (
      0 => '/Users/tantchonta/workspace/pivotech/store-app/themes/classic/templates/index.tpl',
      1 => 1538590501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1e0d0e2bc77_30753722 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20161684495bd1e0d0e2a569_13951379', 'page_content_container');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, 'page.tpl');
}
/* {block 'page_content_top'} */
class Block_20830418825bd1e0d0e2a8c9_34395351 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'hook_home'} */
class Block_19667479205bd1e0d0e2b045_73634552 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

            <?php echo $_smarty_tpl->tpl_vars['HOOK_HOME']->value;?>

          <?php
}
}
/* {/block 'hook_home'} */
/* {block 'page_content'} */
class Block_6713528035bd1e0d0e2ad93_03510171 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_19667479205bd1e0d0e2b045_73634552', 'hook_home', $this->tplIndex);
?>

        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_20161684495bd1e0d0e2a569_13951379 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'page_content_container' => 
  array (
    0 => 'Block_20161684495bd1e0d0e2a569_13951379',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_20830418825bd1e0d0e2a8c9_34395351',
  ),
  'page_content' => 
  array (
    0 => 'Block_6713528035bd1e0d0e2ad93_03510171',
  ),
  'hook_home' => 
  array (
    0 => 'Block_19667479205bd1e0d0e2b045_73634552',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-home">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20830418825bd1e0d0e2a8c9_34395351', 'page_content_top', $this->tplIndex);
?>


        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_6713528035bd1e0d0e2ad93_03510171', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
}
