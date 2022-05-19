<?php
/* Smarty version 4.1.0, created on 2022-05-13 11:51:24
  from 'D:\wamp64\www\wypozyczalnia\templates\dodajsprzet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_627e463c4726f3_70872599',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '702cbbd3a333387560ef5e0c75be133f6a90d30b' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\dodajsprzet.tpl',
      1 => 1652440671,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_627e463c4726f3_70872599 (Smarty_Internal_Template $_smarty_tpl) {
if ((isset($_smarty_tpl->tpl_vars['isLogged']->value))) {?>

    <?php if ($_smarty_tpl->tpl_vars['isLogged']->value == true) {?>

        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_SESSION['grupy'], 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>

            <?php if ($_smarty_tpl->tpl_vars['v']->value == '2') {?>

                <?php $_smarty_tpl->_assignInScope('wystepuje', true);?>

            <?php }?>

        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

        <?php if ((isset($_smarty_tpl->tpl_vars['wystepuje']->value)) && $_smarty_tpl->tpl_vars['wystepuje']->value == true) {?>

            <h1>Dodaj sprzęt:</h1>

            <?php if ((isset($_smarty_tpl->tpl_vars['wynik']->value))) {?> 

                <?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>
 

            <?php }?>

            <form method="POST" action="dodajsprzet.php">

                <p><label>Podaj adres do obrazka:</label> <input type="text" size="30" name="img"></p>
                <p><label>Podaj nazwę instrumentu:</label> <input type="text" size="30" name="nazwa"></p>
                <p><label>Podaj typ instrumentu:</label> <input type="text" size="30" name="typ"></p>
                <p><label>Podaj producenta intrumentu:</label> <input type="text" size="30" name="producent"></p>
                <p><label>Podaj rok produkcji instrumentu:</label> <input type="text" size="30" name="rok_produkcji"></p>
                <p><label>Podaj numer seryjny instrumentu:&nbsp;</label> <input type="text" size="30" name="numer_seryjny"></p>
                <p><label>Podaj model instrumentu:</label> <input type="text" size="30" name="model"></p>
                <p><label>Podaj opis instrumentu:</label> <input type="textfield" size="30" name="opis"></p>
                <br/>
                <p><input type="submit" value="Dodaj"></p>

            </form>

        <?php } else { ?>

                        <p>Nie masz uprawnień do przeglądania tej strony - przejdź do <a href="index.php?page=home">Strony Głównej</a></p>
            
        <?php }?>

    <?php } else { ?>

        <p>Nie masz uprawnień do przeglądania tej strony - przejdź do <a href="index.php?page=home">Strony Głównej</a></p>

    <?php }?>

<?php }
}
}
