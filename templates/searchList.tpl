{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<div class="container mt-3">


        {foreach from=$filter item=$row}
                <li>{$row->b_title} </li>

        {/foreach}


{include file="templates/footer.tpl"}