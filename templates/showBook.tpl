{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<div class="container-inside"
    <div class="card" style="width: 18rem;">
        <h3> {$book->b_title}</h3>

        {if !empty($book->b_image)}
            <img src="{$book->b_image}" class="card-img-top" alt="...">
        {else}
            <img src="./img/libro.jpg" class="card-img-top" alt="...">
        {/if}
    
        <div class="card-body">
        <h5 class="card-title"># {$book->id_book}</h5>
        <p class="card-text">Autor: {$book->b_autor}</p>
        <p class="card-text">Año: {$book->b_year}</p>
        <p class="card-text"> Pais/es: {$country->name}</p>
        {if isset($smarty.session.USER_ROL) and $smarty.session.USER_ROL=='admin'}
            <a class='btn btn-primary btn-sm' href="booksAdmin">Volver<a>
        {else}
            <a class='btn btn-primary btn-sm' href="books/1">Volver<a>
        {/if}
        </div>
    </div>
</div>

{include file="templates/footer.tpl"}
