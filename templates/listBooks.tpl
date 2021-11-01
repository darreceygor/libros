{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}



{if $smarty.session.USER_ROL=='admin'}
    {include file="templates/admin-nav.tpl"}
{/if}
<div class="container mt-3">
    <h3> Listado de Libros</h3>
    <h5>{$smarty.session.USER_ROL}</h5>

    {if $smarty.session.USER_ROL=='user'}
        <div class="input-group mb-3">
            <form action="search" method="GET">
                <input type="text" class="form-control" placeholder="Search books..." id="filter" >
                <button class="btn btn-success mt-1" type="submit" id="filter" name="filter">Buscar </button>
            </form>
        </div>
    {/if}

        {if $user_rol=='admin'}
            <div class="container-sm mt-3">
                <form name="formAddBook" method='POST' action="addBook" >
                    <div class="row g-3">
                        <div><label></div>
                            <div class="col">
                                <label> Titulo </label>
                                <input type="text" class="form-control" name ="title" placeholder="Titulo" required>
                                <label> Año </label>
                                <input type="text" class="form-control" name ="year" placeholder="Año" >
                            </div>
                            <div class="col">
                                <label> Autor </label>
                                <input type="text" class="form-control" name ="autor" placeholder="Autor" required>
                                <label> Country</label>
                                <select class="form-control" name="country">
                                    <option selected>Elegir</option>
                                        {foreach from=$countries item=$country}
                                            <option value="{$country->id_country}">{$country->name}</option>
                                        {/foreach}
                                </select>
                                <label> Si no encuentra el pais correspondiente, puede ingresarlo <a href="countriesAdmin">acá</a></label>
                                 
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="image" name="image">
                            </div>
                        </div> 
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success" >Agregar</button>
                    </div>
                </form>   
            </div> 
        {/if}
<ul>

<table class="table able-striped mt-3">
  <thead>
    <tr>
        {if $smarty.session.USER_ROL=='user'}
            <th></th>
        {/if}
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Autor</th>
        <th scope="col">Year</th>
        <th scope="col">Country</th>
        
        {if $smarty.session.USER_ROL=='admin'}
            <th col=3> Actions <th>
        {/if}
    </tr>
  </thead>
  <tbody>
    <tr>
        {foreach from=$books item=$book}
            <tr>
                {if $smarty.session.USER_ROL=='user'}
                    <td>
                        <a class='btn btn-primary btn-sm' href="book/{$book->id_book}/{$user_rol}">Ver</a>
                    </td>
                {/if}
                <td id="{$book->id_book}">{$book->id_book}</td>
                <td id="{$book->b_title}">{$book->b_title}</td>
                <td id="{$book->b_autor}">{$book->b_autor}</td>
                <td id="{$book->b_year}">{$book->b_year}</td>
                <td id="{$book->name}">{$book->name}</td>
                
                {if $smarty.session.USER_ROL=='admin'}
                    <td>
                        <a class='btn btn-primary btn-sm' href="book/{$book->id_book}/{$user_rol}">Ver</a>
                        <a class="btn btn-warning btn-sm" href="editBook/{$book->id_book}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="delBook/{$book->id_book}">Eliminar</a>
                    </td>
                {/if}
                
    </tr> 
        {/foreach}
        <nav aria-label="Page navigation example">
</nav>
    </tbody>
    </table>


    {if $smarty.session.USER_ROL=='user'}   
    <div class="m-0 row justify-content-center"> 
        <div class="col-auto p-3 text-center">
            <ul class="pagination">

                <li class="page-item {$classPrev}"><a class="page-link" href="books/{$previous}">Previous</a></li>
                {for $menuItem=1 to $pages}
                    <li class="page-item"><a class="page-link" href="books/{$menuItem}">{$menuItem}</a></li>
                {/for}
                <li class="page-item {$classNext}"><a class="page-link" href="books/{$next}">Next</a></li>
            </ul>
        </div>
    </div>
    {/if}

</div>



{include file="templates/footer.tpl"}