<?php

require_once "./Models/Model.php";
require_once "./Views/View.php";
require_once "./helpers/AuthHelper.php";

class Controller{

    private $model;
    private $view;
    private $authHelper;
   
    function __construct(){
        $this->model = new Model();
        $this->view = new View();
        $this->authHelper = new AuthHelper();
    
    }

    /* PAGINAS PRINCIPALES*/
    function showHome(){
        $this->view->showHomePage();
    }

    function showAdmin(){
        $this->authHelper->checkLoggedIn();
        $this->view->showAdminPage();
       
        
  
    }

    /*FIN PAGINAS PRINCIPALES*/

    /* BOOKS */
    function getBooks(){ /*LISTADO PUBLICO*/
        $books=$this->model->getBooks();
        $countries=$this->model->getCountries();
        $this->view->showListBooksAdmin($books,$countries);
    }

    function getListBooks(){ /*LISTADO PUBLICO*/
        $books=$this->model->getBooks();
        $this->view->showListBooks($books);
    }

    function getBook($id,$user_rol){
        $book=$this->model->getBook($id); /*FICHA DETALLE DE ITEM*/
        $country=$this->model->getCountry($book->id_country);
        $this->view->showBook($book,$country,$user_rol);
    }

    function addBook($id){
        $this->authHelper->checkLoggedIn();

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title = $_REQUEST['title'];
            $autor = $_REQUEST['autor'];
            $year = $_REQUEST['year'];
            $country = $_REQUEST['country'];
            $this->model->addBook($title, $autor, $year, $country);
            $this->view->showAdminBookLocation(); 
        }
    }
         
    function editBook($id){
        $this->authHelper->checkLoggedIn();
        $book=$this->model->getBook($id);
        $countries=$this->model->getCountries($id);
        $this->view->editBook($book,$countries);
    }

    function modBook ($id){
        $this->authHelper->checkLoggedIn();
        
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
                $newTitle = $_REQUEST['newTitle'];
                $newAutor = $_REQUEST['newAutor'];
                $newYear = $_REQUEST['newYear'];
                $newCountry = $_REQUEST['newCountry'];
                
                $this->model->modBook($id, $newTitle, $newAutor, $newYear, $newCountry);
                $this->view->showAdminBookLocation();
            }
        }
    
    function delBook($id){
        $this->authHelper->checkLoggedIn();
        $this->model->delBook($id);
        $this->view->showAdminBookLocation();
    }
  


    /* COUNTRIES*/
    function getCountries(){ /*LISTADO PUBLICO*/
        $countries=$this->model->getCountries();
        $this->view->showListCountries($countries);
    }

    function getCountriesAdmin(){ /*LISTADO ADMIN*/
        $countries=$this->model->getCountries();
        $this->view->showListCountriesAdmin($countries);
    }

    /*AGREGAR ITEM*/
    function addCountry(){
        $this->authHelper->checkLoggedIn();
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_REQUEST['name'];
            $this->model->addCountry($name);
            $this->view->showAdminListLocation();
        }
        else {
            echo 'ERROR AL INGRESAR PAIS'; 
            } 
    }

    function editCountry($id){
        $this->authHelper->checkLoggedIn();
        $country=$this->model->getCountry($id);
        $this->view->editCountry($country);           /*EDITAR: TRAE LA FICHA SEGUN ID*/
    }

    function modCountry ($id){  
        $this->authHelper->checkLoggedIn();
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $name = $_REQUEST['name'];
            $this->model->modCountry($id,$name);
            $this->view->showAdminListLocation();
        }
        else {
            echo 'no llego a modcountry';
            
        } 
    }

    /*BORRAR PAIS*/
    function delCountry($id){
        $this->authHelper->checkLoggedIn();
        $books=$this->model->getBooks();
        $country=$this->model->getCountry($id);
        $exist=FALSE;

        $this->model->getCountry($id);
        $this->view->showAdminLocation();

        $total = count($books);
        $index=0;
        while (($exist == FALSE) && ($index < $total)) {
            if ($country->name == $books[$index]->id){
                $exist = TRUE;
            }
            $index++;
    }
        if ($exist == FALSE) {
            $this->model->delCountry($id);      
            $this->view->showAdminListLocation();
        }
        else {
            $this->view->showError();
        } 
    }
}
