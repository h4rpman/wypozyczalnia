<?php
/* Smarty version 4.1.0, created on 2022-05-16 20:20:12
  from 'D:\wamp64\www\wypozyczalnia\templates\usunuzytkownika.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282b1fc2ccf80_89479510',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '1b89437e2554d981b2f57adf70193b1602d4b972' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\usunuzytkownika.tpl',
      1 => 1652732409,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:paginacja.tpl' => 2,
  ),
),false)) {
function content_6282b1fc2ccf80_89479510 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    
    <h1>Usuń wybrane rekordy:</h1>

    <?php $_smarty_tpl->_subTemplateRender("file:paginacja.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

 <form method="POST" action="usunuzytkownika.php" onsubmit="return confirm('Czy na pewno chcesz usunąć wybrane rekordy?');">


           <table bgcolor="white" cellpadding="4" border="1px solid black">

               <tr>
                <td>Wybierz:</td>
                <td>id</td>
                <td>nick</td>
                <td>email</td>
                </tr>

           <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['uzytkownicy']->value, 'v');
$_smarty_tpl->tpl_vars['v']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['v']->value) {
$_smarty_tpl->tpl_vars['v']->do_else = false;
?>
               <tr>
               <td><input type="checkbox" name="usun[]" value="<?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
"><br></td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['id'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['nick'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['v']->value['email'];?>
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
