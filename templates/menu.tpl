{* Smarty *}

<div id="menu">

    <a href="index.php?page=home">HOME</a>

 {if isset($smarty.session.grupy)}

    {foreach from=$smarty.session.grupy item=v}

        {if $v=='1'}
            <a href="index.php?page=dodajuzytkownika">DODAJ UŻYTKOWNIKA</a>
            <a href="edytujuzytkownika.php">EDYTUJ UŻYTKOWNIKA</a>
            <a href="usunuzytkownika.php">USUŃ UŻYTKOWNIKA</a>
        {/if}
        
        {if $v=='2'}
            <a href="index.php?page=dodajsprzet">DODAJ SPRZĘT</a>
            <a href="edytujsprzet.php">EDYTUJ SPRZĘT</a>
            <a href="usunsprzet.php">USUŃ SPRZĘT</a>
            <a href="rezerwacje.php">REZERWACJE</a>
        {/if}
        
        {if $v=='3'}
            <a href="rezerwujsprzet.php">REZERWUJ SPRZĘT</a>
        {/if}

    {/foreach}
{/if}
    <a href="index.php?page=kontakt">KONTAKT</a>

</div>