{* Smarty *}    

    <h1>Edytuj wybrane rekordy:</h1>

{include file="paginacja.tpl"}

 <form method="POST" action="edytujuzytkownika.php">


           <table bgcolor="white" cellpadding="4" border="1px solid black">

 
               <tr>
                <td>Wybierz:</td>
                <td>id</td>
                <td>nick</td>
                <td>email</td>
                </tr>

           {foreach from=$uzytkownicy item=v}
               <tr>
               <td><input type="radio" name="id" value="{$v['id']}"><br></td>
                <td>{$v['id']}</td>
                <td>{$v['nick']}</td>
                <td>{$v['email']}</td>
                </tr>
            {/foreach} 


           </table>

<br/>
        
<input type="submit" value="Edytuj wybrane rekordy" style="background-color:Blue;color:white">

</form>

{include file="paginacja.tpl"}