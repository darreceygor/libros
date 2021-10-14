<?php

class BooksModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_books;charset=utf8', 'root', '');
    }

    /* levanto todos los libros para render de listados */
    function getBooks(){
        $sentencia = $this->db->prepare( "SELECT * FROM books INNER JOIN countries ON books.id_country = countries.id_country");
        $sentencia->execute();
        $books = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $books;
    }

    /* traer un libro segun id para mostrar o actualizar */
    function getBook($id){
        $sentencia = $this->db->prepare( "SELECT * FROM books INNER JOIN countries ON books.id_country = countries.id_country WHERE id_book=?");
        $sentencia->execute(array($id));
        $book = $sentencia->fetch(PDO::FETCH_OBJ);
        return $book;
    }

  /*   ingresar nuevo registro en la db */
  /*CRUC BOOK*/
    function insertBook($title, $autor, $year){
        
        $sentencia = $this->db->prepare("INSERT INTO books(b_title, b_autor, b_year) VALUES(?, ?, ?)");
        $sentencia->execute(array($title, $autor, $year));
    }

    /* eliminar registro en la db */
    function deleteBook($id){
        $sentencia = $this->db->prepare("DELETE FROM books WHERE id_book=?");
        $sentencia->execute(array($id));
    }

    /* actualizar registro en la db */
    function updateBook($id,$title, $autor, $year, $country){
        $sentencia = $this->db->prepare("UPDATE INTO book (b_title, b_autor, b_year, b_country) VALUES (?,?,?,?)WHERE id_book=$id");
        $sentencia->execute(array($title, $autor, $year, $country));
    }


/**********************************************************************************/
/*******   COUNTRY  ***************************************************************/
/**********************************************************************************/


    function getCountry($id){
        $sentencia = $this->db->prepare("SELECT * FROM countries  WHERE id_country=?");
        $sentencia->execute(array($id));
        $country = $sentencia->fetch(PDO::FETCH_OBJ);
        return $country;
    }

    function getCountries(){
        $sentencia = $this->db->prepare("SELECT * FROM countries");
        $sentencia->execute();
        $countries = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $countries;
    }

 

    /*CRUD <COUNTRY></COUNTRY>*/
    function insertCountry($country){
        
        $sentencia = $this->db->prepare("INSERT INTO countries(country) VALUES(?)");
        $sentencia->execute(array($country));
    }

    function deleteCountry($id){
        $sentencia = $this->db->prepare("DELETE FROM countries WHERE id_country=?");
        $sentencia->execute(array($id));

    }

    function updateCountry($id, $country){
        $sentencia = $this->db->prepare("UPDATE INTO countries (country) VALUES (?)WHERE id_country=$id");
        $sentencia->execute(array($country));
    }


}
