{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<div class="container-inside"
    <div class="card" style="width: 18rem;">
        <h3> Ficha de Libro </h3>
        <img src="./img/libro.jpg" class="card-img-top" alt="...">
    
        <div class="card-body">
        <h5 class="card-title"># {$book->id_book} - {$book->b_title}</h5>
        <p class="card-text">Autor: {$book->b_autor}</p>
        <p class="card-text">Año: {$book->b_year}</p>
        <p class="card-text"> Pais/es: {$country->name}</p>
        <a class='btn btn-primary btn-sm' href="{$user_rol}/1">Volver<a>
        </div>
    </div>
</div>

{include file="templates/footer.tpl"}
