    <h1>Dodaj użytkownika:</h1>

{if isset($wynik)} 
    {$wynik} 
{/if}

    <form method="POST" action="dodajuzytkownika.php">

        <p><label>Podaj nick użytkownika:</label> <input type="text" size="30" name="nick"></p>
        <p><label>Podaj hasło użytkownika:</label> <input type="text" size="30" name="haslo"></p>
        <p><label>Podaj email użytownika:</label> <input type="text" size="30" name="email"></p>
        <p><label>Podaj grupy użytownika:</label>  
            <select name="grupy[]" multiple>
                <option value="1">admin</option>
                <option value="2">pracownik</option>
                <option value="3">użytkownik</option>
            </select>
        </p>
        <input hidden type="hidden" size="30" name="akcja" value="dodaj">
        <br/>

        <p><input type="submit" value="Dodaj użytkownika"></p>

    </form>