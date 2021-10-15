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
    /*PUBLICO*/
    function showHome(){
        $this->view->showHomePage();
    }

    function showList(){
        $books = $this->model->getBooks();
        $this->view->showList($books);
    }

    function viewBook($id){
        $book = $this->model->getBook($id);
        $this->view->showBook($book);
    }

    function showListBooks(){
        $this->checkLoggedIn();
        $books = $this->model->getBooks();
        $this->view->showBooks($books);

    }

    
    /*CRUD BOOK*/
    function createBook(){
        $this->checkLoggedIn();
        $this->model->insertBook($_POST['b_title'], $_POST['b_autor'], $_POST['b_year'], $_POST['b_country']);
        $this->view->showAdminLocation();
    }

    function deleteBook($id){
        $this->checkLoggedIn();
        $this->model->deleteBook($id);
        $this->view->showAdminLocation();
    }

    function editBook($id){
        $this->checkLoggedIn();
        $book = $this->model->getBook($id);
        $this->view->editBook($book);
    }

    function updateBook($id){
        $this->checkLoggedIn();
        $this->model->updateBook($id, $_POST['b_title2'], $_POST['b_autor2'], $_POST['b_year2'], $_POST['b_country2']);
        $this->view->showAdminLocation();
    
    }

    
/**********************************************************************************/
/*******   COUNTRY  ***************************************************************/
/**********************************************************************************/

    /*CRUD COUNTRY*/

    function showListCountries(){
        $cpepe = $this->model->getCountries();
        $this->view->showListCountries($cpepe);
    }

    function createCountry(){
        $this->checkLoggedIn();
        $this->model->insertCountry($_POST['country']);
        $this->view->showAdminLocation();
    }

    function deleteCountry($id){
        $this->checkLoggedIn();
        $this->model->deleteCountry($id);
        $this->view->showAdminLocation();
    }

    function editCountry($id){
        $this->checkLoggedIn();
        $country= $this->model->getCountry($id);
        $this->view->editCountry($country);
    }

    function updateCountry($id){
        $this->checkLoggedIn();
        $this->model->updateCountry($id, $_POST['country2']);
        $this->view->showAdminLocation();
    
    }

   

/**********************************************************************************/
/*******   LOGGED IN  *************************************************************/
/**********************************************************************************/


    private function checkLoggedIn() {

        session_start();
        if (empty($_SESSION['USER_ID'])) {
            header("Location:".LOGIN);
        }    

    }
}
