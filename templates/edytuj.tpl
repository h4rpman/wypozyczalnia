Edytuj sprzęt

    {if isset($wynik)} 
        
        {$wynik} 
    
    {/if}

    {if isset($edytowany)}

         {if $edytowany == 'instrument'}

        <form method="POST" action="edytujsprzet.php">

            {foreach from=$instrument item=v}
            
                <input hidden type="hidden" size="30" name="id" value="{$v['id']}">
                <p><label>Podaj adres do obrazka:</label> <input type="text" size="30" name="img" value="{$v['img']}"></p>
                <p><label>Podaj nazwę instrumentu:</label> <input type="text" size="30" name="nazwa" value="{$v['nazwa']}"></p>
                <p><label>Podaj typ instrumentu:</label> <input type="text" size="30" name="typ" value="{$v['typ']}"></p>
                <p><label>Podaj producenta intrumentu:</label> <input type="text" size="30" name="producent" value="{$v['producent']}"></p>
                <p><label>Podaj rok produkcji instrumentu:</label> <input type="text" size="30" name="rok_produkcji" value="{$v['rok_produkcji']}"></p>
                <p><label>Podaj numer seryjny instrumentu:&nbsp;</label> <input type="text" size="30" name="numer_seryjny" value="{$v['numer_seryjny']}"></p>
                <p><label>Podaj model instrumentu:</label> <input type="text" size="30" name="model" value="{$v['model']}"></p>
                <p><label>Podaj opis instrumentu:</label> <input type="textfield" size="30" name="opis" value="{$v['opis']}"></p>
                <p><label>Podaj opis instrumentu:</label> <input hidden type="hidden" size="30" name="edycja" value="1"></p>
                <br/>
                <p><input type="submit" value="Dodaj instrument"></p>

            {/foreach}

        </form>

        {else if $edytowany == 'uzytkownik'}
            <form method="POST" action="edytujuzytkownika.php">

            {foreach from=$uzytkownik item=v}

                <input hidden type="hidden" size="30" name="id" value="{$v['id']}">
                <p><label>Podaj nick użytkownika:</label> <input type="text" size="30" name="nick" value="{$v['nick']}"></p>
                <p><label>Podaj hasło użytkownika:</label> <input type="password" size="30" name="haslo" value="{$v['haslo']}"></p></p>
                <p><label>Podaj email użytownika:</label> <input type="text" size="30" name="email" value="{$v['email']}"></p>
                <p><label>Podaj grupy użytownika:</label>  
                    <select name="grupy[]" multiple>
                        
                        <option value="1"{foreach from=$grupy item=x}{if $x['id_grupy'] == 1}selected{/if}{/foreach}>admin</option>
                        <option value="2"{foreach from=$grupy item=x}{if $x['id_grupy'] == 2}selected{/if}{/foreach}>pracownik</option>
                        <option value="3"{foreach from=$grupy item=x}{if $x['id_grupy'] == 3}selected{/if}{/foreach}>użytkownik</option>
                    </select>
                </p>
                <input hidden type="hidden" size="30" name="edycja" value="1">
                <br/>
                        
            {/foreach}
            {$uzytkownik = ''}
                <p><input type="submit" value="Dodaj użytkownika"></p>

            </form>
        {/if}

    {/if}