<?php
/* Smarty version 4.1.0, created on 2022-05-19 17:02:02
  from 'C:\wamp64\www\wypozyczalnia\templates\paginacja.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6286780a29ac82_78500913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3995487252fcd7f26321a3df70b5405cf8900d73' => 
    array (
      0 => 'C:\\wamp64\\www\\wypozyczalnia\\templates\\paginacja.tpl',
      1 => 1652978867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6286780a29ac82_78500913 (Smarty_Internal_Template $_smarty_tpl) {
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
