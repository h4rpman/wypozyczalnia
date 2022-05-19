<?php
/* Smarty version 4.1.0, created on 2022-05-19 17:06:00
  from 'C:\wamp64\www\wypozyczalnia\templates\rezerwacje.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_628678f8129bc6_63647038',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'accb1880f83b50ccc22737a6b3e9c95cf2b6bc72' => 
    array (
      0 => 'C:\\wamp64\\www\\wypozyczalnia\\templates\\rezerwacje.tpl',
      1 => 1652978867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_628678f8129bc6_63647038 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    
<?php if ((isset($_smarty_tpl->tpl_vars['wynik']->value))) {?> 
    <?php echo $_smarty_tpl->tpl_vars['wynik']->value;?>
 
<?php }?>

    <h1>Zatwierdź wybrane rezerwacje do wydania:</h1>

 <form method="POST" action="zatwierdzsprzet.php" onsubmit="return confirm('Czy na pewno chcesz wydać wybrane instrumenty?');">

           <table bgcolor="white" cellpadding="4" border="1px solid black">

               <tr>
                <td>Wybierz:</td>
                <td>Wypożyczony od:</td>
                <td>Wypożyczony do:</td>
                <td>id</td>
                <td>zdjęcie</td>
                <td>nazwa</td>
                <td>typ</td>
                <td>producent</td>
                <td>rok_produkcji</td>
                <td>numer_seryjny</td>
                <td>model</td>
                <td>opis</td>
                </tr>

           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instrumenty_niewydane']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
               <tr>
               <td><input type="checkbox" name="zatwierdz[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><br></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zajety_od'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zajety_do'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
               <td><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" width="40%"/></a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['nazwa'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['typ'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['producent'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rok_produkcji'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['v']->value['numer_seryjny'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['model'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['opis'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

           </table>

<br/>
        
<input type="submit" value="Zatwierdź do wydania" style="background-color:Blue;color:white">

<h1>Wypożyczone instrumenty:</h1>

 </form>
 
 <form method="POST" action="zwrocsprzet.php" onsubmit="return confirm('Czy na pewno chcesz oznaczyć wybrane instrumenty jako zwrócone?');">

           <table bgcolor="white" cellpadding="4" border="1px solid black">

               <tr>
                <td>Wybierz:</td>
                <td>Wypożyczony od:</td>
                <td>Wypożyczony do:</td>
                <td>id</td>
                <td>zdjęcie</td>
                <td>nazwa</td>
                <td>typ</td>
                <td>producent</td>
                <td>rok_produkcji</td>
                <td>numer_seryjny</td>
                <td>model</td>
                <td>opis</td>
                </tr>

           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instrumenty_wydane']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
               <tr>
               <td><input type="checkbox" name="zwroc[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><br></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zajety_od'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['zajety_do'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
               <td><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" width="40%"/></a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['nazwa'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['typ'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['producent'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['rok_produkcji'];?>
</td>
               <td><?php echo $_smarty_tpl->tpl_vars['v']->value['numer_seryjny'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['model'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['opis'];?>
</td>
                </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>

           </table>

<br/>
        
<input type="submit" value="Oznacz jako zwrócone" style="background-color:Blue;color:white">
</form><?php }
}
