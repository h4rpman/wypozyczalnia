{* Smarty *}


{if isset($errors)}
    <div class="error">{$errors}</div>
{/if}

{if isset($smarty.get.page)}

    {if $smarty.get.page eq "home"}
        {include file="home.tpl"}

    {elseif $smarty.get.page eq "logowanie"}

        {include file="logowanie.tpl"}

    {elseif $smarty.get.page eq "dodajsprzet"}

        {include file="dodajsprzet.tpl"}

    {elseif $smarty.get.page eq "edytujsprzet"}

        {include file="edytujsprzet.tpl"}

    {elseif $smarty.get.page eq "edycja"}

        {include file="edytuj.tpl"}    

    {elseif $smarty.get.page eq "rezerwujsprzet"}

        {include file="rezerwujsprzet.tpl"}

    {elseif $smarty.get.page eq "usunsprzet"}

        {include file="usunsprzet.tpl"}

    {elseif $smarty.get.page eq "rezerwacje"}

        {include file="rezerwacje.tpl"}

    {elseif $smarty.get.page eq "dodajuzytkownika"}

        {include file="dodajuzytkownika.tpl"}

    {elseif $smarty.get.page eq "edytujuzytkownika"}

        {include file="edytujuzytkownika.tpl"}

    {elseif $smarty.get.page eq "usunuzytkownika"}

        {include file="usunuzytkownika.tpl"}

    {elseif $smarty.get.page eq "kontakt"}

        {include file="kontakt.tpl"}

    {/if}

{else}

        {include file="home.tpl"}

{/if}