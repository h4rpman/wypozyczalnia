 <form method="POST" id="rezerwujsprzet" action="zarezerwujsprzet.php" onsubmit="return confirm('Czy na pewno chcesz zarezerwować wybrane rekordy?');">
     

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

           {foreach from=$instrumenty_do_rezerwacji key=k item=v}
               <tr>
               <td><input type="checkbox" name="rezerwuj[]" value="{$v['id']}"><br></td>
                <td><input type="date" name="zajety_od[{$v['id']}]" value=""></td>
                <td><input type="date" name="zajety_do[{$v['id']}]" value=""></td>
                <td>{$v['id']}</td>
               <td><a href="{$v['img']}"><img src="{$v['img']}" width="70%"/></a></td>
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
      
<input type="submit" value="Rezerwuj wybrane rekordy" style="background-color:Blue;color:white">
</div>
</form>