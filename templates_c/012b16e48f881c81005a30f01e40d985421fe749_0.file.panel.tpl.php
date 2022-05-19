<?php
/* Smarty version 4.1.0, created on 2022-05-19 16:47:51
  from 'C:\wamp64\www\wypozyczalnia\templates\panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628674b7074172_99025321',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '012b16e48f881c81005a30f01e40d985421fe749' => 
    array (
      0 => 'C:\\wamp64\\www\\wypozyczalnia\\templates\\panel.tpl',
      1 => 1652978867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628674b7074172_99025321 (Smarty_Internal_Template $_smarty_tpl) {
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
