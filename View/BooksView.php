<?php

require_once  ('libs/smarty-3.1.39/libs/Smarty.class.php');

class BooksView{
    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHomePage (){
        $this->smarty->display('templates/home.tpl');
    }

    function showBooks($books){

        $this->smarty->assign('estado', "nuevo");
        $this->smarty->assign('books', $books);

        $this->smarty->display('templates/showBooks.tpl'); /* muestra el listado de libros */
    }

    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showAdminLocation(){
        header("Location: ".BASE_URL."admin");
    }

     function showListLocation(){
    header("Location: ".BASE_URL."list");
    }

    /* muestro el libro sobre id seleccionado para actualizar */
    function showBook($book){

        $this->smarty->assign('estado', "nuevo");
        $this->smarty->assign('book', $book);

        $this->smarty->display('templates/cardBook.tpl'); /* muestra un libro */
    }

    /* seccion listado publica */
    function showList($books){
        $this->smarty->assign('estado', "lista");
        $this->smarty->assign('books', $books);

        $this->smarty->display('templates/showBooks.tpl');
  }

  function editBook($book){

    $this->smarty->assign('estado', "editar");
    $this->smarty->assign('book', $book);
    $this->smarty->assign('ficha', "Libros");

    $this->smarty->display('templates/editBook.tpl'); /* form para editar y actualizar libro en db */
  }

/**********************************************************************************/
/*******   COUNTRY  ***************************************************************/
/**********************************************************************************/

    function editCountry($country){

        $this->smarty->assign('estado', "editar");
        $this->smarty->assign('country', $country);
        $this->smarty->assign('ficha', "Paises");
        
        $this->smarty->display('templates/editBook.tpl'); /* form para editar y actualizar libro en db */
    }

    function showListCountries($countries){

        
        $this->smarty->assign('countries', $countries);

        $this->smarty->display('templates/showCountries.tpl'); /* muestra el listado de libros y paises*/

        echo'
        <ul>
        <select>';
        foreach ($countries as $country) {
            echo'
            <option value="'.$country->id_country.'">'.$country->country.'</option>';
        }
        echo'</select>
        </ul>';

    }
 
}
