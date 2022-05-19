{if $smarty.session.pagenumber-1 > 0 }
<button onclick="location.href='{$smarty.server.PHP_SELF}?pagenumber={$smarty.session.pagenumber-1}'" type="button">
         Poprzednia</button>
{/if}

Strona {$smarty.session.pagenumber}

{if $wyswietlaj_nastepny == TRUE }
         <button onclick="location.href='{$smarty.server.PHP_SELF}?pagenumber={$smarty.session.pagenumber+1}'" type="button">
         Nastepna</button>
{/if} 