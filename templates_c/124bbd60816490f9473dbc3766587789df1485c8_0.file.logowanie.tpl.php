<?php
/* Smarty version 4.1.0, created on 2022-05-19 10:30:11
  from 'D:\wamp64\www\wypozyczalnia\templates\logowanie.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_62861c33694c10_67772777',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '124bbd60816490f9473dbc3766587789df1485c8' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\logowanie.tpl',
      1 => 1652956207,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62861c33694c10_67772777 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form method="POST" action="logowanie.php">

        <p><label>Login:</label><input type="text" name="login" maxlength="32" autofocus></p>
        <p><label>Hasło:</label><input type="password" name="haslo" maxlength="32"></p>
        <br/>
        <p><input type="submit" value="Zaloguj"></p>

</form><?php }
}
