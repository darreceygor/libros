{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

{if $user_rol=='admin'}
    {include file="templates/admin-nav.tpl"}
{/if}
<div class="container mt-3">
    <h3> Listado de Libros</h3>
        {if $user_rol=='admin'}
            <div class="container-sm mt-3">
                <form name="formAddBook" method='POST' action="addBook" >
                    <div class="row g-3">
                        <div><label></div>
                            <div class="col">
                                <label> Titulo </label>
                                <input type="text" class="form-control" name ="title" placeholder="Titulo" >
                                <label> Año </label>
                                <input type="text" class="form-control" name ="year" placeholder="Año" >
                            </div>
                            <div class="col">
                                <label> Autor </label>
                                <input type="text" class="form-control" name ="autor" placeholder="Autor" >
                                <label> Country</label>
                                <select class="form-control" name="country">
                                    <option selected>Elegir</option>
                                        {foreach from=$countries item=$country}
                                            <option value="{$country->id_country}">{$country->name}</option>
                                        {/foreach}
                                </select>
                                 
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
        {if $user_rol=='books'}
            <th></th>
        {/if}
        <th scope="col">#</th>
        <th scope="col">Title</th>
        <th scope="col">Autor</th>
        <th scope="col">Year</th>
        <th scope="col">Country</th>
        {if $user_rol=='admin'}
            <th col=3> Actions <th>
        {/if}
    </tr>
  </thead>
  <tbody>
    <tr>
        {foreach from=$books item=$book}
            <tr>
                {if $user_rol=='books'}
                    <td>
                        <a class='btn btn-primary btn-sm' href="book/{$book->id_book}/{$user_rol}">Ver</a>
                    </td>
                {/if}
                <td id="{$book->id_book}">{$book->id_book}</td>
                <td id="{$book->b_title}">{$book->b_title}</td>
                <td id="{$book->b_autor}">{$book->b_autor}</td>
                <td id="{$book->b_year}">{$book->b_year}</td>
                <td id="{$book->name}">{$book->name}</td>
                {if $user_rol=='admin'}
                    <td>
                        <a class='btn btn-primary btn-sm' href="book/{$book->id_book}/{$user_rol}">Ver</a>
                        <a class="btn btn-warning btn-sm" href="editBook/{$book->id_book}">Editar</a>
                        <a class="btn btn-danger btn-sm" href="delBook/{$book->id_book}">Eliminar</a>
                    </td>
                {/if}
                
    </tr> 
        {/foreach}
    </tbody>
    </table>

</div>



{include file="templates/footer.tpl"}