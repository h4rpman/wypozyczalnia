<?php
/* Smarty version 4.1.0, created on 2022-05-19 16:47:50
  from 'C:\wamp64\www\wypozyczalnia\templates\menu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628674b6f379a8_71082956',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '204b82bc4b51a279c7f15baeb6125937efb2f0dc' => 
    array (
      0 => 'C:\\wamp64\\www\\wypozyczalnia\\templates\\menu.tpl',
      1 => 1652978867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628674b6f379a8_71082956 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="menu">

    <a href="index.php?page=home">HOME</a>

 <?php if ((isset($_SESSION['grupy']))) {?>

    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['grupy'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>

        <?php if ($_smarty_tpl->tpl_vars['v']->value == '1') {?>
            <a href="index.php?page=dodajuzytkownika">DODAJ UŻYTKOWNIKA</a>
            <a href="edytujuzytkownika.php">EDYTUJ UŻYTKOWNIKA</a>
            <a href="usunuzytkownika.php">USUŃ UŻYTKOWNIKA</a>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['v']->value == '2') {?>
            <a href="index.php?page=dodajsprzet">DODAJ SPRZĘT</a>
            <a href="edytujsprzet.php">EDYTUJ SPRZĘT</a>
            <a href="usunsprzet.php">USUŃ SPRZĘT</a>
            <a href="rezerwacje.php">REZERWACJE</a>
        <?php }?>
        
        <?php if ($_smarty_tpl->tpl_vars['v']->value == '3') {?>
            <a href="rezerwujsprzet.php">REZERWUJ SPRZĘT</a>
        <?php }?>

    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}?>
    <a href="index.php?page=kontakt">KONTAKT</a>

</div><?php }
}
