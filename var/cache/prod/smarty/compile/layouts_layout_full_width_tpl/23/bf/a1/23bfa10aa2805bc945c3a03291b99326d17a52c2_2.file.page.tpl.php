<?php
/* Smarty version 3.1.32, created on 2018-10-25 17:27:12
  from '/Users/tantchonta/workspace/pivotech/store-app/themes/classic/templates/page.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5bd1e0d0e374e2_52248327',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '23bfa10aa2805bc945c3a03291b99326d17a52c2' => 
    array (
      0 => '/Users/tantchonta/workspace/pivotech/store-app/themes/classic/templates/page.tpl',
      1 => 1538590501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5bd1e0d0e374e2_52248327 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_loadInheritance();
$_smarty_tpl->inheritance->init($_smarty_tpl, true);
?>


<?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3602640925bd1e0d0e31cb7_04483149', 'content');
?>

<?php $_smarty_tpl->inheritance->endChild($_smarty_tpl, $_smarty_tpl->tpl_vars['layout']->value);
}
/* {block 'page_title'} */
class Block_9700459125bd1e0d0e32412_20230608 extends Smarty_Internal_Block
{
public $callsChild = 'true';
public $hide = 'true';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

        <header class="page-header">
          <h1><?php 
$_smarty_tpl->inheritance->callChild($_smarty_tpl, $this);
?>
</h1>
        </header>
      <?php
}
}
/* {/block 'page_title'} */
/* {block 'page_header_container'} */
class Block_20058504145bd1e0d0e32054_46344459 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_9700459125bd1e0d0e32412_20230608', 'page_title', $this->tplIndex);
?>

    <?php
}
}
/* {/block 'page_header_container'} */
/* {block 'page_content_top'} */
class Block_16691160965bd1e0d0e36033_47092725 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'page_content_top'} */
/* {block 'page_content'} */
class Block_10414306685bd1e0d0e36477_92980321 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Page content -->
        <?php
}
}
/* {/block 'page_content'} */
/* {block 'page_content_container'} */
class Block_4599974515bd1e0d0e35cc8_84337430 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <section id="content" class="page-content card card-block">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_16691160965bd1e0d0e36033_47092725', 'page_content_top', $this->tplIndex);
?>

        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_10414306685bd1e0d0e36477_92980321', 'page_content', $this->tplIndex);
?>

      </section>
    <?php
}
}
/* {/block 'page_content_container'} */
/* {block 'page_footer'} */
class Block_11514052875bd1e0d0e36d66_03396519 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

          <!-- Footer content -->
        <?php
}
}
/* {/block 'page_footer'} */
/* {block 'page_footer_container'} */
class Block_12281649715bd1e0d0e36ab5_33326865 extends Smarty_Internal_Block
{
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

      <footer class="page-footer">
        <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_11514052875bd1e0d0e36d66_03396519', 'page_footer', $this->tplIndex);
?>

      </footer>
    <?php
}
}
/* {/block 'page_footer_container'} */
/* {block 'content'} */
class Block_3602640925bd1e0d0e31cb7_04483149 extends Smarty_Internal_Block
{
public $subBlocks = array (
  'content' => 
  array (
    0 => 'Block_3602640925bd1e0d0e31cb7_04483149',
  ),
  'page_header_container' => 
  array (
    0 => 'Block_20058504145bd1e0d0e32054_46344459',
  ),
  'page_title' => 
  array (
    0 => 'Block_9700459125bd1e0d0e32412_20230608',
  ),
  'page_content_container' => 
  array (
    0 => 'Block_4599974515bd1e0d0e35cc8_84337430',
  ),
  'page_content_top' => 
  array (
    0 => 'Block_16691160965bd1e0d0e36033_47092725',
  ),
  'page_content' => 
  array (
    0 => 'Block_10414306685bd1e0d0e36477_92980321',
  ),
  'page_footer_container' => 
  array (
    0 => 'Block_12281649715bd1e0d0e36ab5_33326865',
  ),
  'page_footer' => 
  array (
    0 => 'Block_11514052875bd1e0d0e36d66_03396519',
  ),
);
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>


  <section id="main">

    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20058504145bd1e0d0e32054_46344459', 'page_header_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_4599974515bd1e0d0e35cc8_84337430', 'page_content_container', $this->tplIndex);
?>


    <?php 
$_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_12281649715bd1e0d0e36ab5_33326865', 'page_footer_container', $this->tplIndex);
?>


  </section>

<?php
}
}
/* {/block 'content'} */
}
