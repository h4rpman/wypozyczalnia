<?php
/* Smarty version 4.1.0, created on 2022-05-19 16:47:50
  from 'C:\wamp64\www\wypozyczalnia\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628674b6ebacc9_95437178',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2d004c7b8d4293e2bdf4ec79dd1b39221c5d5c53' => 
    array (
      0 => 'C:\\wamp64\\www\\wypozyczalnia\\templates\\header.tpl',
      1 => 1652978867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:panel.tpl' => 1,
  ),
),false)) {
function content_628674b6ebacc9_95437178 (Smarty_Internal_Template $_smarty_tpl) {
?>

<header>

    <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</header><?php }
}
