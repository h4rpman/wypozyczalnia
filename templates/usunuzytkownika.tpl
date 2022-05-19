{* Smarty *}    
    
    <h1>Usuń wybrane rekordy:</h1>

    {include file="paginacja.tpl"}

 <form method="POST" action="usunuzytkownika.php" onsubmit="return confirm('Czy na pewno chcesz usunąć wybrane rekordy?');">


           <table bgcolor="white" cellpadding="4" border="1px solid black">

               <tr>
                <td>Wybierz:</td>
                <td>id</td>
                <td>nick</td>
                <td>email</td>
                </tr>

           {foreach from=$uzytkownicy item=v}
               <tr>
               <td><input type="checkbox" name="usun[]" value="{$v['id']}"><br></td>
                <td>{$v['id']}</td>
                <td>{$v['nick']}</td>
                <td>{$v['email']}</td>
                </tr>
            {/foreach} 

           </table>

<br/>
        
<input type="submit" value="Usuń wybrane rekordy" style="background-color:red;color:white">

</form>

{include file="paginacja.tpl"}