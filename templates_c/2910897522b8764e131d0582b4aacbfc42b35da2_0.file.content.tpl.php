<?php
/* Smarty version 4.1.0, created on 2022-05-16 20:08:31
  from 'D:\wamp64\www\wypozyczalnia\templates\content.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6282af3fbc1be7_09668710',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2910897522b8764e131d0582b4aacbfc42b35da2' => 
    array (
      0 => 'D:\\wamp64\\www\\wypozyczalnia\\templates\\content.tpl',
      1 => 1652731678,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:home.tpl' => 2,
    'file:logowanie.tpl' => 1,
    'file:dodajsprzet.tpl' => 1,
    'file:edytujsprzet.tpl' => 1,
    'file:edytuj.tpl' => 1,
    'file:rezerwujsprzet.tpl' => 1,
    'file:usunsprzet.tpl' => 1,
    'file:rezerwacje.tpl' => 1,
    'file:dodajuzytkownika.tpl' => 1,
    'file:edytujuzytkownika.tpl' => 1,
    'file:usunuzytkownika.tpl' => 1,
    'file:kontakt.tpl' => 1,
  ),
),false)) {
function content_6282af3fbc1be7_09668710 (Smarty_Internal_Template $_smarty_tpl) {
?>

<?php if ((isset($_smarty_tpl->tpl_vars['errors']->value))) {?>
    <div class="error"><?php echo $_smarty_tpl->tpl_vars['errors']->value;?>
</div>
<?php }?>

<?php if ((isset($_GET['page']))) {?>

    <?php if ($_GET['page'] == "home") {?>
        <?php $_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "logowanie") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:logowanie.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "dodajsprzet") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:dodajsprzet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "edytujsprzet") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:edytujsprzet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "edycja") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:edytuj.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>    

    <?php } elseif ($_GET['page'] == "rezerwujsprzet") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:rezerwujsprzet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "usunsprzet") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:usunsprzet.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "rezerwacje") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:rezerwacje.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "dodajuzytkownika") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:dodajuzytkownika.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "edytujuzytkownika") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:edytujuzytkownika.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "usunuzytkownika") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:usunuzytkownika.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php } elseif ($_GET['page'] == "kontakt") {?>

        <?php $_smarty_tpl->_subTemplateRender("file:kontakt.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <?php }?>

<?php } else { ?>

        <?php $_smarty_tpl->_subTemplateRender("file:home.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php }
}
}
