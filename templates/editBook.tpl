    {include file='templates/header.tpl'}  
    
    {if $ficha =="Libros"}
        <h3>Editar {$ficha}</h3>

        <form action="{BASE_URL}updateBook" method="POST">
            <div class="mb-3">
                <label for="b_title2" class="form-label">Titulo </label>
                <input type="text" class="form-control" name="b_title2" value="{$book->b_title}" >

                <label for="b_autor2" class="form-label">Autor</label>
                <input type="text" class="form-control" name="b_autor2" value="{$book->b_autor}">

                <label for="b_year2" class="form-label">Año</label>
                <input type="text" class="form-control" name="b_year2" value="{$book->b_year}">

                <label for="b_country2" class="form-label">Origen</label>
                <input type="text" class="form-control" name="b_country2" value="{$book->country}">
            </div>
            <div class="mb-3 form-check">

        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="{BASE_URL}admin" class="btn btn-primary">Volver</a>
        {* <button class="btn btn-primary" name="admin">Volver</button> *}
        </div>
      </form>
    {elseif $ficha=="Paises"}
        <h3>Editar {$ficha}</h3>

        <form action="{BASE_URL}updateBook" method="POST">
            <div class="mb-3">
                <label for="b_title2" class="form-label">Pais </label>
                <input type="text" class="form-control" name="b_country2" value="{$countries->country}">
            </div>
            <div class="mb-3 form-check">

        <button type="submit" class="btn btn-primary">Agregar</button>
        <a href="{BASE_URL}admin" class="btn btn-primary">Volver</a>
        {* <button class="btn btn-primary" name="admin">Volver</button> *}
        </div>
      </form>


    {/if}


    {include file='templates/footer.tpl'}   

