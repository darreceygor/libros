
{include file="templates/header.tpl"}



  <div class="container-sm mt-5">
  
        <form name="formBook" method='GET' action='modBook/{$book->id_book}' >
              <div class="row g-3">
                <div><label># {$book->id_book}</div>
                <div class="col">
                    <label> Titulo </label>
                    <input type="text" class="form-control" name ="newTitle" value="{$book->b_title}" >
                    <label> Año </label>
                    <input type="text" class="form-control" name ="newYear" value="{$book->b_year}" >
                </div>
                <div class="col">
                    <label> Autor </label>
                    <input type="text" class="form-control" name ="newAutor" value="{$book->b_autor}" >
                    <label> Country {$book->id_country}</label>

                    <select class='form-control' name='newCountry'>
                      {foreach from=$countries item=$country}    
                          {if $country->id_country == $book->id_country}
                              <option selected value="{$country->id_country}"> {$country->name}</option>
                          {else}
                              <option value="{$country->id_country}"> {$country->name}</option> 
                          {/if}
                      {/foreach}
                    </select>
                </div>
              </div> 
            <div class="mt-3">
              <a class="btn btn-secondary" href="booksAdmin">Cerrar</a>
              <button type="submit" class="btn btn-success">Actualizar</button>
            </div>
        </form>    

</div>

 {include file="templates/footer.tpl"}

