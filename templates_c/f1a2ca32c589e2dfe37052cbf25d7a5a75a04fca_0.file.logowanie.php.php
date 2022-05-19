<?php
/* Smarty version 4.1.0, created on 2022-05-04 09:15:23
  from 'D:\wamp64\www\wypozyczalnia\htdocs\logowanie.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6272442b9d34d7_12182597',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f1a2ca32c589e2dfe37052cbf25d7a5a75a04fca' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\htdocs\\logowanie.php',
      1 => 1651655721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6272442b9d34d7_12182597 (Smarty_Internal_Template $_smarty_tpl) {
echo '<?php'; ?>


if($_POST['login'] && $_POST['haslo']) {
    $login = $_POST['login'];
    $haslo = $_POST['haslo'];

    if(isset($_GET['login']) OR isset($_GET['haslo'])) {

        if ( $_GET['login'] != '' ) { 
            
            exit; // czy ktoś probował mieszać GET, jeśli tak to przerwij proces


        }

        if ( $_GET['haslo'] != '' ) {
            
            exit; // czy ktoś probował mieszać GET, jeśli tak to przerwij proces
        
        }
    }

        //szyfrowanie hasla

    $haslo = md5($haslo); 
        
        if ( !$login OR empty($login) ) {
        
            echo '<p class="alert">Wypełnij pole z loginem!</p>';
        }

        if ( !$haslo OR empty($haslo) ) {

            echo '<p class="alert">Wypełnij pole z hasłem!</p>';
        }

}
<?php echo '?>';
}
}
