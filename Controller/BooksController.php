<?php

require_once "./Model/BooksModel.php";
require_once "./View/BooksView.php";

class BooksController{

    private $model;
    private $view;

    function __construct(){
        $this->model = new BooksModel();
        $this->view = new BooksView();
    }

    function showHome(){

            $this->view->showHomePage();
    }

    function showListBooks(){
        $books = $this->model->getBooks();
        $this->view->showBooks($books);
    }

    function showList(){
        $books = $this->model->getBooks();
        $this->view->showList($books);
    }

    function createBook(){
         if(!isset($_POST['done'])){
            $done = 0;
        }else{
            $done = 1;
        } 
  
        $this->model->insertBook($_POST['b_title'], $_POST['b_autor'], $_POST['b_year'], $_POST['b_country']);
        $this->view->showAdminLocation();
    }

    function deleteBook($id){
        $this->model->deleteBook($id);
        $this->view->showAdminLocation();
    }

    function editBook($id){
        $book = $this->model->getBook($id);
        $this->view->editBook($book);
    }

    function viewBook($id){
        $book = $this->model->getBook($id);
        $this->view->showBook($book);
    
    }
}
