<?php
/* Smarty version 4.1.0, created on 2022-05-19 16:47:56
  from 'C:\wamp64\www\wypozyczalnia\templates\logowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628674bc8a1650_79451482',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e86dd7b29eb5cc8b1ac6a4173c39be303c9cadac' => 
    array (
      0 => 'C:\\wamp64\\www\\wypozyczalnia\\templates\\logowanie.tpl',
      1 => 1652978867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628674bc8a1650_79451482 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST" action="logowanie.php">

        <p><label>Login:</label><input type="text" name="login" maxlength="32" autofocus></p>
        <p><label>Hasło:</label><input type="password" name="haslo" maxlength="32"></p>
        <br/>
        <p><input type="submit" value="Zaloguj"></p>

</form><?php }
}
