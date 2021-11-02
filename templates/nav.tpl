{if isset($smarty.session.USER_ROL)}
  {$user_rol=$smarty.session.USER_ROL}
{else}
  {$user_rol='anonimo'}
{/if}

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img class="icon" src="./img/icono.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home">Home</a>

        {* <a class="nav-link" href="countries">Countries List</a> *}
        {if $user_rol == 'admin'}
         {*  <a class="nav-link" href="countries">Countries List</a> *}
          <a class="nav-link" >Administrator</a> 
          
        {else}
          <a class="nav-link" href="countries">Countries List</a>
          <a class="nav-link" href="books/1">Books List</a>
        {/if}

        {* {if (isset($smarty.session.USER_ID)) and ($smarty.session.USER_ROL=='admin') } 
          <a class="nav-link" href="admin">Administrator</a>
        {else}
          <a class="nav-link disabled" href="admin">Administrator</a>
        {/if}   *}
          <div class="d-flex justify-content-end">
          
            {if isset($smarty.session.USER_ID) } 
              <a class="nav-link" href="logout">{$smarty.session.USER_EMAIL}, Logout</a>
            {else}
              <a class="nav-link" href="login">Login</a>
            {/if}
          </div>
      </div>
    </div>
    <div>
          {if isset($user_rol)}
            <h4><span class="badge rounded-pill bg-success">{$user_rol}</span></h4>
          {else}
            <h4><span class="badge rounded-pill bg-secondary">anonimo</span></h4>
          {/if} 
    </div>
  </div>
</nav>
{if $user_rol=='admin'}
    {include file="templates/admin-nav.tpl"}
{/if}

