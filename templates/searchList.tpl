{include file="templates/header.tpl"}
{include file="templates/nav.tpl"}

<div class="container mt-3">


<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Título</th>
      <th scope="col">Autor</th>
      <th scope="col">Año</th>
    </tr>
  </thead>
  <tbody>
    
        {foreach from=$rows item=$row} 
        <tr> 
                <th scope="row">{$row->id_book}</th>
                <td>{$row->b_title}</td>
                <td>{$row->b_autor}</td>
                <td>{$row->b_year}</td>
        </tr>
      {/foreach}
    

  </tbody>
</table>



        

        {if isset($smarty.session.USER_ROL) and $smarty.session.USER_ROL=='user'}
            <a class='btn btn-primary btn-sm' href="booksAdmin">Volver<a>
        {else}
            <a class='btn btn-primary btn-sm' href="books/1">Volver<a>
        {/if}
{include file="templates/footer.tpl"}