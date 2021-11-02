<nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">
    <a href="countriesAdmin" class="btn btn-outline-success me-2" type="button">Item: Paises</a>
    <a href="booksAdmin" class="btn btn-outline-success me-2" type="button">Fichas: Libros</a>

    {if isset($smarty.session.USER_ROL) and $smarty.session.USER_ROL=='admin'}
      <a href="userAdmin" class="btn btn-outline-success me-2" type="button">Control de Usuarios</a>
    {/if}

  </form>
</nav>