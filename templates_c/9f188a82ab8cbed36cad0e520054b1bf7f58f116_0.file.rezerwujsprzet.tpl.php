<?php
/* Smarty version 4.1.0, created on 2022-05-19 17:02:02
  from 'C:\wamp64\www\wypozyczalnia\templates\rezerwujsprzet.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.1.0',
  'unifunc' => 'content_6286780a026b29_16714698',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9f188a82ab8cbed36cad0e520054b1bf7f58f116' => 
    array (
      0 => 'C:\\wamp64\\www\\wypozyczalnia\\templates\\rezerwujsprzet.tpl',
      1 => 1652978867,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:paginacja.tpl' => 2,
    'file:rezerwujsprzet_form.tpl' => 1,
  ),
),false)) {
function content_6286780a026b29_16714698 (Smarty_Internal_Template $_smarty_tpl) {
?>    
    
    <h1>Rezerwuj wybrane rekordy:</h1>

<!-- <form method="POST" action="rezerwujsprzet.php">
               <td><input type="text" name="term" autofocus><br></td>
<input type="submit" value="Szukaj" style="background-color:Blue;color:white">
</form>-->

<!--<div onclick="ajaxPostForm('szukajka','rezerwujsprzet.php','test1');">test</div>-->

<!-- nowy plik php zapytanie ajax
przekaz zapytanie,
przekaz form postem z frazą,
plik selectuje z sql po frazie,
na konec wstawia sobie tpl w zaleznosci od przekazanego php_self,
i wraca w div lol
-->

<form method="POST" id="szukajka" onsubmit="ajaxPostForm('szukajka','rezerwujsprzet.php','content_form');return false;">
               <td><input type="text" name="term" autofocus><br></td>
<input type="submit" value="Szukaj" style="background-color:Blue;color:white">
</form>

<?php $_smarty_tpl->_subTemplateRender("file:paginacja.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div id="content_form">

    <?php $_smarty_tpl->_subTemplateRender("file:rezerwujsprzet_form.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

</div>

<br/>

<?php $_smarty_tpl->_subTemplateRender("file:paginacja.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
}
}
