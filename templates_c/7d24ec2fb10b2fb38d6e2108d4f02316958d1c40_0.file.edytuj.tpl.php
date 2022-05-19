<?php
/* Smarty version 4.1.0, created on 2022-05-13 10:40:52
  from 'D:\wamp64\www\wypozyczalnia\templates\edytuj.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627e35b44c5881_28350304',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d24ec2fb10b2fb38d6e2108d4f02316958d1c40' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\edytuj.tpl',
      1 => 1652438424,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627e35b44c5881_28350304 (Smarty_Internal_Template $_smarty_tpl) {
?>Edytuj sprzęt

    <?php if ((isset($_smarty_tpl->tpl_vars['wynik']->value))) {?> 
        
        <?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>
 
    
    <?php }?>

    <?php if ((isset($_smarty_tpl->tpl_vars['edytowany']->value))) {?>

         <?php if ($_smarty_tpl->tpl_vars['edytowany']->value == 'instrument') {?>

        <form method="POST" action="edytujsprzet.php">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instrument']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
            
                <input hidden type="hidden" size="30" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                <p><label>Podaj adres do obrazka:</label> <input type="text" size="30" name="img" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
"></p>
                <p><label>Podaj nazwę instrumentu:</label> <input type="text" size="30" name="nazwa" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['nazwa'];?>
"></p>
                <p><label>Podaj typ instrumentu:</label> <input type="text" size="30" name="typ" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['typ'];?>
"></p>
                <p><label>Podaj producenta intrumentu:</label> <input type="text" size="30" name="producent" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['producent'];?>
"></p>
                <p><label>Podaj rok produkcji instrumentu:</label> <input type="text" size="30" name="rok_produkcji" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['rok_produkcji'];?>
"></p>
                <p><label>Podaj numer seryjny instrumentu:&nbsp;</label> <input type="text" size="30" name="numer_seryjny" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['numer_seryjny'];?>
"></p>
                <p><label>Podaj model instrumentu:</label> <input type="text" size="30" name="model" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['model'];?>
"></p>
                <p><label>Podaj opis instrumentu:</label> <input type="textfield" size="30" name="opis" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['opis'];?>
"></p>
                <p><label>Podaj opis instrumentu:</label> <input hidden type="hidden" size="30" name="edycja" value="1"></p>
                <br/>
                <p><input type="submit" value="Dodaj instrument"></p>

            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        </form>

        <?php } elseif ($_smarty_tpl->tpl_vars['edytowany']->value == 'uzytkownik') {?>
            <form method="POST" action="edytujuzytkownika.php">

            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uzytkownik']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>

                <input hidden type="hidden" size="30" name="id" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
">
                <p><label>Podaj nick użytkownika:</label> <input type="text" size="30" name="nick" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['nick'];?>
"></p>
                <p><label>Podaj hasło użytkownika:</label> <input type="password" size="30" name="haslo" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['haslo'];?>
"></p></p>
                <p><label>Podaj email użytownika:</label> <input type="text" size="30" name="email" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
"></p>
                <p><label>Podaj grupy użytownika:</label>  
                    <select name="grupy[]" multiple>
                        
                        <option value="1"<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grupy']->value, 'x');
$_smarty_tpl->tpl_vars['x']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->do_else = false;
if ($_smarty_tpl->tpl_vars['x']->value['id_grupy'] == 1) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>admin</option>
                        <option value="2"<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grupy']->value, 'x');
$_smarty_tpl->tpl_vars['x']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->do_else = false;
if ($_smarty_tpl->tpl_vars['x']->value['id_grupy'] == 2) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>pracownik</option>
                        <option value="3"<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['grupy']->value, 'x');
$_smarty_tpl->tpl_vars['x']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['x']->value) {
$_smarty_tpl->tpl_vars['x']->do_else = false;
if ($_smarty_tpl->tpl_vars['x']->value['id_grupy'] == 3) {?>selected<?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>>użytkownik</option>
                    </select>
                </p>
                <input hidden type="hidden" size="30" name="edycja" value="1">
                <br/>
                        
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php $_smarty_tpl->_assignInScope('uzytkownik', '');?>
                <p><input type="submit" value="Dodaj użytkownika"></p>

            </form>
        <?php }?>

    <?php }
}
}
