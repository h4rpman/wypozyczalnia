<?php
/* Smarty version 4.1.0, created on 2022-05-04 14:05:03
  from 'D:\wamp64\www\wypozyczalnia\htdocs\wyloguj.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6272880f0c27c7_16123079',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9355f4706c6205beebcbeeea302bbf5030ce26d4' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\htdocs\\wyloguj.php',
      1 => 1651673101,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6272880f0c27c7_16123079 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>
 
        if (session_status() === PHP_SESSION_NONE) {
            header("Refresh:2; URL=index.php");
            echo "Nie ma potrzeby wylogowywać";
            session_destroy();
        }
        else {

            session_destroy();
            header("Refresh:2; URL=index.php");
            echo "Użytkownik został wylogowany.";

        }
<?php echo '?>';
}
}
