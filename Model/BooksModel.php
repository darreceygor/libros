<?php

class BooksModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_books;charset=utf8', 'root', '');
    }

    /* levanto todos los libros para render de listados */
    function getBooks(){
        $sentencia = $this->db->prepare( "SELECT * FROM books");
        $sentencia->execute();
        $books = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $books;
    } 

  /*   ingresar nuevo registro en la db */
    function insertBook($title, $autor, $year, $country){
        
        $sentencia = $this->db->prepare("INSERT INTO books(b_title, b_autor, b_year, b_country) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($title, $autor, $year, $country));
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

    /* traer un libro segun id para mostrar o actualizar */
    function getBook($id){
        $sentencia = $this->db->prepare( "SELECT * FROM books WHERE id_book=?");
        $sentencia->execute(array($id));
        $book = $sentencia->fetch(PDO::FETCH_OBJ);
        return $book;
    }
}
