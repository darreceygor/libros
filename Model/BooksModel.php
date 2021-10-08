<?php

class BooksModel{

    private $db;
    function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_books;charset=utf8', 'root', '');
    }

    function getBooks(){
        $sentencia = $this->db->prepare( "SELECT * FROM books");
        $sentencia->execute();
        $books = $sentencia->fetchAll(PDO::FETCH_OBJ);
        return $books;
    } 

    function insertBook($title, $autor, $year, $country){
        
        $sentencia = $this->db->prepare("INSERT INTO books(b_title, b_autor, b_year, b_country) VALUES(?, ?, ?, ?)");
        $sentencia->execute(array($title, $autor, $year, $country));
    }

    function deleteBook($id){
        $sentencia = $this->db->prepare("DELETE FROM books WHERE id_book=?");
        $sentencia->execute(array($id));
    }

    function updateBook($id,$title, $autor, $year, $country){
        $sentencia = $this->db->prepare("UPDATE book SET b_title='$title', b_autor='$autor', b_year='$year', b_country='$country' WHERE id_book=$id");
        $sentencia->execute(array($title, $autor, $year, $country));
    }

    

    function getBook($id){
        $sentencia = $this->db->prepare( "SELECT * FROM books WHERE id_book=?");
        $sentencia->execute(array($id));
        $book = $sentencia->fetch(PDO::FETCH_OBJ);
        return $book;
    }
}
