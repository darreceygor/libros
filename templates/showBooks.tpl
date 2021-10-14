
        {include file='templates/header.tpl'}
        {include file='templates/nav.tpl'}

        {if $estado=="nuevo"}
            {include file='templates/formBook.tpl'}
            {include file='templates/formCountry.tpl'}
        {/if}   

        <section class=".col-md-4">
          {include file="templates/showCountries.tpl"}          
        </section>

        </section>

        <section class=".col-md-8">
          <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titulo</th>
              <th scope="col">Autor</th>
              <th scope="col">Año</th>

              {if $estado!="lista"}
                <th scope="col">Origen</th>
                <th scope="col 2" colspan="2">Acciones</th>
              {/if}
            </tr>
            <br><br>
          </thead>
          <tbody>

        {foreach from=$books item=$book}         
            <tr>
              <th scope="row">{$book->id_book}</th>
              {if $estado=="lista"}
                <td><a href="viewBook/{$book->id_book}">{$book->b_title}</a></td>
              {else}
                <td>{$book->b_title}</td>
              {/if}
                <td>{$book->b_autor}</td>
                <td>{$book->b_year}</td>
                

              {if $estado!="lista"}
                <td>{$book->country}</td>
                <td><a class="btn btn-warning" href="editBook/{$book->id_book}">Editar</button></td>
                <td><a class="btn btn-danger" href="deleteBook/{$book->id_book}">Eliminar</a></td>
              {/if}
            </tr>
        
        {/foreach}  
        </tbody>
        </table>
        </section>
 

{include file='templates/footer.tpl'}