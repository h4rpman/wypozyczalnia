<?php
/* Smarty version 4.1.0, created on 2022-05-16 20:09:00
  from 'D:\wamp64\www\wypozyczalnia\templates\usunsprzet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282af5cf2ad09_86644459',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b780a83787bf4c7161a39575f7a0ae59458a0d8' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\usunsprzet.tpl',
      1 => 1652731685,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:paginacja.tpl' => 2,
  ),
),false)) {
function content_6282af5cf2ad09_86644459 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    
    <h1>Usuń wybrane rekordy:</h1>

<?php $_smarty_tpl->_subTemplateRender("file:paginacja.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <form method="POST" action="usunsprzet.php" onsubmit="return confirm('Czy na pewno chcesz usunąć wybrane rekordy?');">


           <table bgcolor="white" cellpadding="4" border="1px solid black">

               <tr>
                <td>Wybierz:</td>
                <td>Wypożycz od:</td>
                <td>Wypożycz do:</td>
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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instrumenty']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
               <tr>
               <td><input type="checkbox" name="usun[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><br></td>
                <td><?php if (!empty($_smarty_tpl->tpl_vars['v']->value['zajety_od'])) {?>
                <?php echo $_smarty_tpl->tpl_vars['v']->value['zajety_od'];?>

                <?php } else { ?>
                <center>--</center><?php }?></td>
                                <td><?php if (!empty($_smarty_tpl->tpl_vars['v']->value['zajety_do'])) {?>
                <?php echo $_smarty_tpl->tpl_vars['v']->value['zajety_do'];?>

                <?php } else { ?>
                <center>--</center><?php }?></td>
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
        
<input type="submit" value="Usuń wybrane rekordy" style="background-color:red;color:white">

</form>

<?php $_smarty_tpl->_subTemplateRender("file:paginacja.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
