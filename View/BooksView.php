<?php

class BooksView{

    function __construct(){

    }

    function showHomePage (){

      include_once ("./templates/header.php");
      include_once ("./templates/nav.php");


      include_once ("./templates/footer.php");
    }

    function showBooks($books){

        include_once ("./templates/header.php");
        include_once ("./templates/nav.php");
            
        echo'   <h1>Catalogo de Libros 2021</h1>

            </ul>
            <h3>Libro nuevo...</h3>

            <form action="createBook" method="POST">
                <div class="mb-3">
                    <label for="b_title" class="form-label">Titulo</label>
                    <input type="text" class="form-control" name="b_title" >

                    <label for="b_autor" class="form-label">Autor</label>
                    <input type="text" class="form-control" name="b_autor">

                    <label for="b_year" class="form-label">Año</label>
                    <input type="text" class="form-control" name="b_year">

                    <label for="b_country" class="form-label">Origen</label>
                    <input type="text" class="form-control" name="b_country">
                </div>
                <div class="mb-3 form-check">

            <button type="submit" class="btn btn-primary">Agregar</button>
          </form>

          <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Titulo</th>
              <th scope="col">Autor</th>
              <th scope="col">Año</th>
              <th scope="col">Origen</th>
              <th scope="col 2" colspan="2">Acciones</th>
            </tr>
            <br><br>
          </thead>
          <tbody>';

          foreach($books as $book) {         
            echo' <tr>
              <th scope="row">'. $book->id_book .'</th>
              <td> <a href="viewBook/'.$book->id_book.'">'.$book->b_title .'</a></td>
              <td>'.$book->b_autor .'</td>
              <td>'.$book->b_year .'</td>
              <td>'.$book->b_country.'</td>
              <td><a class="btn btn-warning" href="editBook/'.$book->id_book.'">Editar</button></td>
              <td><a class="btn btn-danger" href="deleteBook/'.$book->id_book.'">Eliminar</a></td>
            </tr>
          ';
          }
        echo '</tbody>
        </table>';

        include_once("./templates/footer.php");

    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showAdminLocation(){
      header("Location: ".BASE_URL."admin");
  }

    function showBook($book){

        include_once ("./templates/header.php");

         
        echo '<div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">'.$book->b_title.'</h5>
                    <h6 class="card-subtitle mb-2 text-muted"> </h6>
                    <p class="card-text">'.$book->b_year.'</p>
                    <p class="card-text">'.$book->b_country.'</p>
                    <p class="card-text">'.$book->b_autor.'</p>
                    <p class="card-text"> </p>
                </div>
                <td><button type="button" class="btn btn-info" href="home">Volver</button></td>
              </div>';

        include_once("./templates/footer.php");
    }

    function showList($books){

      include_once ("./templates/header.php");
      include_once ("./templates/nav.php");
          
      echo'   <h1>BOOKS CATALOG 2021</h1>

        <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Titulo</th>
            <th scope="col">Autor</th>
            <th scope="col">Año</th>
            <th scope="col">Origen</th>
          </tr>
          <br><br>
        </thead>
        <tbody>';

        foreach($books as $book) {         
          echo' <tr>
            <th scope="row">'. $book->id_book .'</th>
            <td> <a href="./viewBook/'.$book->id_book.'">'.$book->b_title .'</a></td>
            <td>'.$book->b_autor .'</td>
            <td>'.$book->b_year .'</td>
            <td>'.$book->b_country.'</td>
            </tr>
        ';
        }
      echo '</tbody>
      </table>';

      include_once("./templates/footer.php");

  }

  function editBook($book){

    include_once ("./templates/header.php");
    include_once ("./templates/nav.php");
        
    echo'   <h1>Catalogo de Libros 2021</h1>

        </ul>
        <h3>Editar libro</h3>

        <form action="updateBook" method="POST">
            <div class="mb-3">
                <label for="b_title" class="form-label">Titulo: '.$book->b_title .'</label>
                <input type="text" class="form-control" name="b_title" >

                <label for="b_autor" class="form-label">Autor: '.$book->b_autor .'</label>
                <input type="text" class="form-control" name="b_autor">

                <label for="b_year" class="form-label">Año: '.$book->b_year .'</label>
                <input type="text" class="form-control" name="b_year">

                <label for="b_country" class="form-label">Origen: '.$book->b_country .'</label>
                <input type="text" class="form-control" name="b_country">
            </div>
            <div class="mb-3 form-check">

        <button type="submit" class="btn btn-primary">Agregar</button>
        <button class="btn btn-primary" name="admin">Volver</button>
      </form>';
  }



}
