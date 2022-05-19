{* Smarty *}    

    <h1>Edytuj wybrane rekordy:</h1>

    {include file="paginacja.tpl"}

 <form method="POST" action="edytujsprzet.php">


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

           {foreach from=$instrumenty item=v}
               <tr>
               <td><input type="radio" name="id" value="{$v['id']}"><br></td>
                <td>{if !empty($v['zajety_od'])}
                {$v['zajety_od']}
                {else}
                <center>--</center>{/if}</td>
                                <td>{if !empty($v['zajety_do'])}
                {$v['zajety_do']}
                {else}
                <center>--</center>{/if}</td>
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
        
<input type="submit" value="Edytuj wybrane rekordy" style="background-color:Blue;color:white">

</form>

{include file="paginacja.tpl"}