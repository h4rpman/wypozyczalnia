<?php
/* Smarty version 4.1.0, created on 2022-05-16 19:57:19
  from 'D:\wamp64\www\wypozyczalnia\templates\paginacja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282ac9f7829e1_22217539',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '40650b65bd9a10e493eb71aea83b2a9ee0fbe133' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\paginacja.tpl',
      1 => 1652731034,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6282ac9f7829e1_22217539 (Smarty_Internal_Template $_smarty_tpl) {
if ($_SESSION['pagenumber']-1 > 0) {?>
<button onclick="location.href='<?php echo $_SERVER['PHP_SELF'];?>
?pagenumber=<?php echo $_SESSION['pagenumber']-1;?>
'" type="button">
         Poprzednia</button>
<?php }?>

Strona <?php echo $_SESSION['pagenumber'];?>


<?php if ($_smarty_tpl->tpl_vars['wyswietlaj_nastepny']->value == TRUE) {?>
         <button onclick="location.href='<?php echo $_SERVER['PHP_SELF'];?>
?pagenumber=<?php echo $_SESSION['pagenumber']+1;?>
'" type="button">
         Nastepna</button>
<?php }?> <?php }
}
