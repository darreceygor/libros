
{include file='templates/header.tpl'}


<div class="card" style="width: 18rem;">
    <div class="card-body">
        <h5 class="card-title">{$book->b_title}</h5>
        <h6 class="card-subtitle mb-2 text-muted"> </h6>
        <p class="card-text">{$book->b_year}</p>
        <p class="card-text">{$book->country}</p>
        <p class="card-text">{$book->b_autor}</p>
        <p class="card-text"> </p>
    </div>

    <td><a href="../list" class="btn btn-info" >Volver</a></td>
</div>

{include file='templates/footer.tpl'}
