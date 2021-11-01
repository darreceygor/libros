<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand"><img class="icon" src="./img/icono.jpg"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="home">Home</a>

        <a class="nav-link" href="countries">Countries List</a>
        <a class="nav-link" href="books/1">Books List</a>
        
        {if (isset($smarty.session.USER_ID)) and ($smarty.session.USER_ROL=='admin') } 
          <a class="nav-link" href="admin">Administrator</a>
        {else}
          <a class="nav-link disabled" href="admin">Administrator</a>
        {/if}  
          <div class="d-flex justify-content-end">
          
            {if isset($smarty.session.USER_ID) } 
              <a class="nav-link" href="logout">{$smarty.session.USER_EMAIL}, Logout</a>
            {else}
              <a class="nav-link" href="login">Login</a>
            {/if}
          </div>
      </div>
    </div>
  </div>
</nav>

