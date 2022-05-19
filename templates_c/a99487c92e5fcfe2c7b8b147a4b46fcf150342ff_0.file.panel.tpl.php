<?php
/* Smarty version 4.1.0, created on 2022-05-13 10:44:05
  from 'D:\wamp64\www\wypozyczalnia\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627e3675440a95_19102306',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a99487c92e5fcfe2c7b8b147a4b46fcf150342ff' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\panel.tpl',
      1 => 1652438641,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627e3675440a95_19102306 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="panel">
    
    <?php if ($_smarty_tpl->tpl_vars['isLogged']->value == true) {?>
        <p>Witaj, <?php echo $_SESSION['nick'];?>
<br/></p>
        <a href="wyloguj.php">Wyloguj</a>
    <?php } else { ?>
        <a href="index.php?page=logowanie">LOGOWANIE</a>
    <?php }?>

</div><?php }
}
