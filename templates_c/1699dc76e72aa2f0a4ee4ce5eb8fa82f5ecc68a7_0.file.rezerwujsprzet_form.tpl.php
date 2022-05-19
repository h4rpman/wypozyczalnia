<?php
/* Smarty version 4.1.0, created on 2022-05-19 17:02:02
  from 'C:\wamp64\www\wypozyczalnia\templates\rezerwujsprzet_form.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6286780a356eb2_09128230',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1699dc76e72aa2f0a4ee4ce5eb8fa82f5ecc68a7' => 
    array (
      0 => 'C:\\wamp64\\www\\wypozyczalnia\\templates\\rezerwujsprzet_form.tpl',
      1 => 1652978867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6286780a356eb2_09128230 (Smarty_Internal_Template $_smarty_tpl) {
?> <form method="POST" id="rezerwujsprzet" action="zarezerwujsprzet.php" onsubmit="return confirm('Czy na pewno chcesz zarezerwować wybrane rekordy?');">
     

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
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['instrumenty_do_rezerwacji']->value, 'v', false, 'k');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['k']->value => $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
               <tr>
               <td><input type="checkbox" name="rezerwuj[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><br></td>
                <td><input type="date" name="zajety_od[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value=""></td>
                <td><input type="date" name="zajety_do[<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
]" value=""></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
               <td><a href="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
"><img src="<?php echo $_smarty_tpl->tpl_vars['v']->value['img'];?>
" width="70%"/></a></td>
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
      
<input type="submit" value="Rezerwuj wybrane rekordy" style="background-color:Blue;color:white">
</div>
</form><?php }
}
