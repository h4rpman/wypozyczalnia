
{if isset($isLogged)}

    {if $isLogged==true}

        {foreach from=$smarty.session.grupy item=v}

            {if $v == '2'}

                {$wystepuje = true}

            {/if}

        {/foreach}

        {if isset($wystepuje) && $wystepuje == true}

            <h1>Dodaj sprzęt:</h1>

            {if isset($wynik)} 

                {$wynik} 

            {/if}

            <form method="POST" action="dodajsprzet.php">

                <p><label>Podaj adres do obrazka:</label> <input type="text" size="30" name="img"></p>
                <p><label>Podaj nazwę instrumentu:</label> <input type="text" size="30" name="nazwa"></p>
                <p><label>Podaj typ instrumentu:</label> <input type="text" size="30" name="typ"></p>
                <p><label>Podaj producenta intrumentu:</label> <input type="text" size="30" name="producent"></p>
                <p><label>Podaj rok produkcji instrumentu:</label> <input type="text" size="30" name="rok_produkcji"></p>
                <p><label>Podaj numer seryjny instrumentu:&nbsp;</label> <input type="text" size="30" name="numer_seryjny"></p>
                <p><label>Podaj model instrumentu:</label> <input type="text" size="30" name="model"></p>
                <p><label>Podaj opis instrumentu:</label> <input type="textfield" size="30" name="opis"></p>
                <br/>
                <p><input type="submit" value="Dodaj"></p>

            </form>

        {else}

                        <p>Nie masz uprawnień do przeglądania tej strony - przejdź do <a href="index.php?page=home">Strony Głównej</a></p>
            
        {/if}

    {else}

        <p>Nie masz uprawnień do przeglądania tej strony - przejdź do <a href="index.php?page=home">Strony Głównej</a></p>

    {/if}

{/if}