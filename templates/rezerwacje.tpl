{* Smarty *}    
    
{if isset($wynik)} 
    {$wynik} 
{/if}

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

           {foreach from=$instrumenty_niewydane item=v}
               <tr>
               <td><input type="checkbox" name="zatwierdz[]" value="{$v['id']}"><br></td>
                <td>{$v['zajety_od']}</td>
                <td>{$v['zajety_do']}</td>
                <td>{$v['id']}</td>
               <td><a href="{$v['img']}"><img src="{$v['img']}" width="40%"/></a></td>
                <td>{$v['nazwa']}</td>
                <td>{$v['typ']}</td>
                <td>{$v['producent']}</td>
                <td>{$v['rok_produkcji']}</td>
               <td>{$v['numer_seryjny']}</td>
                <td>{$v['model']}</td>
                <td>{$v['opis']}</td>
                </tr>
            {/foreach}

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

           {foreach from=$instrumenty_wydane item=v}
               <tr>
               <td><input type="checkbox" name="zwroc[]" value="{$v['id']}"><br></td>
                <td>{$v['zajety_od']}</td>
                <td>{$v['zajety_do']}</td>
                <td>{$v['id']}</td>
               <td><a href="{$v['img']}"><img src="{$v['img']}" width="40%"/></a></td>
                <td>{$v['nazwa']}</td>
                <td>{$v['typ']}</td>
                <td>{$v['producent']}</td>
                <td>{$v['rok_produkcji']}</td>
               <td>{$v['numer_seryjny']}</td>
                <td>{$v['model']}</td>
                <td>{$v['opis']}</td>
                </tr>
            {/foreach}

           </table>

<br/>
        
<input type="submit" value="Oznacz jako zwrócone" style="background-color:Blue;color:white">
</form>