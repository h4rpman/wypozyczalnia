{* Smarty *}    
    
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

{include file="paginacja.tpl"}



<div id="content_form">

    {include file="rezerwujsprzet_form.tpl"}

</div>

<br/>

{include file="paginacja.tpl"}