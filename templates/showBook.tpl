{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}


<div class="container-fluid p-2">
    <h3> {$book->b_title}</h3>

    <div class="row p-2">
        <div class="col-sm-4 p-2" style="background-color:lavender;">

            <div class="ms-2">
                {if !empty($book->b_image)}
                    <img src="{$book->b_image}" class="book" alt="...">
                {else}
                    <img src="./img/libro.jpg" class="book" alt="...">
                {/if}

                <h5># {$book->id_book}</h5>
                <p>Autor: {$book->b_autor}</p>
                 <p>Año: {$book->b_year}</p>
                <p> Pais/es: {$country->name}</p>
            </div>
        </div>
        
        <div class="col-sm-8 p-2" style="background-color:lavender;">
            
                <div id="allComments" value ={$book->id_book}>

                </div>

            {if isset($smarty.session.USER_ID)}
            <form id="formComments" method="POST" resource="api/addComment">
                <div class="mt-2">
                    <input type="hidden" id="id_book" name="id_book" value={$book->id_book}>
                    {*para identificar el libro al que corresponde el comentario*}
                    <input type="hidden" id="id_user" name="id_user" value={$smarty.session.USER_ID}>
                    {*para despues poner en el titulo del comentario*}

               
                    <p><label>Opiniones</label>                
                        <textarea required="required" id="textComment" name="textComment" cols="50" rows="1" placeholder="Comentar"></textarea> </td>
                        <label>Calificar</label>            
                            <select name="id_score" id="id_score">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select></td>
                        <button type="submit" id="btn_comment" class="btn btn-success btn-sm">Comentar</button>
                </form>
                </div>    
            {/if} 
        </div>
    </div>

    {if isset($smarty.session.USER_ROL) and $smarty.session.USER_ROL=='admin'}
        <a class='btn btn-primary btn-sm' href="booksAdmin">Volver<a>
    {else}
        <a class='btn btn-primary btn-sm' href="books/1">Volver<a>
    {/if}
</div>


{* {include file="vue/comments.tpl"} *}



<script src="js/api.js"></script>
{include file="templates/footer.tpl"}
