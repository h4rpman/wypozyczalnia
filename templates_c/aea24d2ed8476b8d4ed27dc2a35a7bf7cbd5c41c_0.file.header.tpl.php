<?php
/* Smarty version 4.1.0, created on 2022-05-13 13:44:17
  from 'D:\wamp64\www\wypozyczalnia\templates\header.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627e60b1a44b78_35237557',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aea24d2ed8476b8d4ed27dc2a35a7bf7cbd5c41c' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\header.tpl',
      1 => 1652449455,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:menu.tpl' => 1,
    'file:panel.tpl' => 1,
  ),
),false)) {
function content_627e60b1a44b78_35237557 (Smarty_Internal_Template $_smarty_tpl) {
?>

<header>

    <?php $_smarty_tpl->_subTemplateRender("file:menu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <?php $_smarty_tpl->_subTemplateRender("file:panel.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</header><?php }
}
