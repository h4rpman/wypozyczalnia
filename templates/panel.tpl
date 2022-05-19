{* Smarty *}

<div id="panel">
    {*assign var="errors" value='test'*}

    {if $isLogged == true }
        <p>Witaj, {$smarty.session.nick}<br/></p>
        <a href="wyloguj.php">Wyloguj</a>
    {else}
        <a href="index.php?page=logowanie">LOGOWANIE</a>
    {/if}

</div>