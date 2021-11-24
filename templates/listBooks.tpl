{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}


{if isset($smarty.session.USER_ROL)}
    {$user_rol=$smarty.session.USER_ROL}
{else}
    {$user_rol='anonimo' }
{/if}

<div class="container mt-3">
    <h3> Listado de Libros</h3>
    

    {if $user_rol=='user'}

        <div class="container">
            <div >
                <label class="me-3"> Busqueda </label>
                    <form name="searchForm" method='POST' action="search">
                        <input type="text" name="buscar" >
                        <input class="ms-2" type="radio" name="opcion" value="b_title"> Titulo
                        <input class="ms-2" type="radio" name="opcion" value="b_autor"> Autor
                        <input class="ms-2" type="radio" name="opcion" value="b_year"> Año
                           
                             <button type="submit" class="btn btn-success btn-sm ms-3" >Buscar</button>
                    </form>
            </div>
        </div>
    {/if}
        
          {if $user_rol=='admin'}
            <div class="container-sm mt-3">
                <form name="formAddBook" method='POST' action="addBook"  enctype="multipart/form-data">
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
                                <label> Pais</label>
                                <select class="form-control" name="country">
                                    <option selected>Elegir</option>
                                        {foreach from=$countries item=$country}
                                            <option value="{$country->id_country}">{$country->name}</option>
                                        {/foreach}
                                </select>
                                <label> Si no encuentra el pais correspondiente, puede ingresarlo <a href="countriesAdmin">acá</a></label>
                                 
                            </div>
                            <div class="input-group mb-3">
                                <input type="file" class="form-control" id="imageToUpload" name="input_image">
                            </div>
                        </div> 
                    <div class="mt-3">
                        <button type="submit" class="btn btn-success" >Guardar</button>
                    </div>
                </form>   
            </div> 
        {/if}
<ul>

<table class="table able-striped mt-3">
  <thead>
    <tr>
        {if $user_rol=='user'}
            <th></th>
        {/if}
        <th scope="col">#</th>
        <th scope="col">Titulo</th>
        <th scope="col">Autor</th>
        <th scope="col">Año</th>
        <th scope="col">Pais</th>
        
        {if $user_rol=='admin'}
            <th col=3> Acciones <th>
        {/if}
    </tr>
  </thead>
  <tbody>
    <tr>
        {foreach from=$books item=$book}
            <tr>
                {if $user_rol !='admin'}
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
    {* SECCION DE COMENTARIOS EN CADA UNA DE LAS LINEAS QUE CORRESPONDE A UNA FICHA: LIBRO*}
    {* 
            <td colspan="2"></td>
            <td colspan="4" class="table-active">
            <form name="formAddComment" id="formAddComment" method='POST' > *}
        {* {if $user_rol !='anonimo'}        
            <div>
                    <label>Comentarios...</label>
                    <input type="hidden" name ="id_book" class="id_book" value="{$book->id_book}" >
                    <input type="text" name ="comment" class="comment">
                    <label>Rate</label>
                    <select name="rate" class="rate">
                            <option selected>Elegir</option>
                            <option name="rate" value="1">1</option>
                            <option name="rate" value="2">2</option>
                            <option name="rate" value="3">3</option>
                            <option name="rate" value="4">4</option>
                            <option name="rate" value="5">5</option>
                        </select>
                    <button type="submit" class="btn btn-success btn-sm" >Enviar</button>
                </div>
        {/if} *}
    {*            <section id="comments">
                    <ul class="list-comments">
                    </ul>
                </section>
                
            </td>*}

    
    
    {*FIN SECCION *}
    
    {/foreach} 
        <nav aria-label="Page navigation example">
</nav>
    </tbody>
    </table>


    {if $user_rol !='admin'}  
    <div class="m-0 row justify-content-center"> 
        <div class="col-auto p-3 text-center">
            <ul class="pagination">

                <li class="page-item {$classPrev}"><a class="page-link" href="books/{$previous}">Anterior</a></li>
                {for $menuItem=1 to $pages}
                    <li class="page-item"><a class="page-link" href="books/{$menuItem}">{$menuItem}</a></li>
                {/for}
                <li class="page-item {$classNext}"><a class="page-link" href="books/{$next}">Siguiente</a></li>
            </ul>
        </div>
    </div>
    {/if} 

</div>

<script src="js/api.js"></script>

{include file="templates/footer.tpl"}