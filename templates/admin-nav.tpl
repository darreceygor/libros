<nav class="navbar navbar-light bg-light">
  <form class="container-fluid justify-content-start">
    <a href="countriesAdmin" class="btn btn-outline-success me-2" type="button">Countries List</a>
    <a href="booksAdmin" class="btn btn-outline-success me-2" type="button">Books List</a>

    {if (isset($smarty.session.USER_ROL) and ($smarty.session.USER_ROL=='admin')}
      <a href="userAdmin" class="btn btn-outline-success me-2" type="button">User Control</a>
    {/if}

  </form>
</nav>