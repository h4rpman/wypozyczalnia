<?php
/* Smarty version 4.1.0, created on 2022-05-11 21:23:30
  from 'D:\wamp64\www\wypozyczalnia\templates\dodajuzytkownika.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627c2952608b53_09123326',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5fb044c28c5addd2c470fc3916422c5a5770c118' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\dodajuzytkownika.tpl',
      1 => 1652302314,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627c2952608b53_09123326 (Smarty_Internal_Template $_smarty_tpl) {
?>    <h1>Dodaj użytkownika:</h1>

<?php if ((isset($_smarty_tpl->tpl_vars['wynik']->value))) {?> 
    <?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>
 
<?php }?>

    <form method="POST" action="dodajuzytkownika.php">

        <p><label>Podaj nick użytkownika:</label> <input type="text" size="30" name="nick"></p>
        <p><label>Podaj hasło użytkownika:</label> <input type="text" size="30" name="haslo"></p>
        <p><label>Podaj email użytownika:</label> <input type="text" size="30" name="email"></p>
        <p><label>Podaj grupy użytownika:</label>  
            <select name="grupy[]" multiple>
                <option value="1">admin</option>
                <option value="2">pracownik</option>
                <option value="3">użytkownik</option>
            </select>
        </p>
        <input hidden type="hidden" size="30" name="akcja" value="dodaj">
        <br/>

        <p><input type="submit" value="Dodaj użytkownika"></p>

    </form><?php }
}
