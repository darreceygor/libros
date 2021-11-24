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
        $this->view->showAdminPage();
    }

/*FIN PAGINAS PRINCIPALES*/
/****************************************************************/
/****************************************************************/

    
/* BOOKS */
         function getBooks(){ /*LISTADO PUBLICO*/
        $this->authHelper->checkLoggedIn();
        $books=$this->model->getBooks();
        $countries=$this->model->getCountries();
        $this->view->showListBooksAdmin($books,$countries);
    } 

    function getListBooks($page){ /*LISTADO PUBLICO*/
        
    /*variables para paginacion*/
        $itemsPerPage=$this->model->itemsPerPage();  
        $books=$this->model->getBooksLimit($page);
        $rows=$this->model->getRowsBooks();
        $pages=ceil($rows/$itemsPerPage);
        
    /* fin paginacion */
        $this->view->showListBooks($books,$rows,$itemsPerPage,$pages,$page);
    }

    function getBook($id,$user_rol){
        $book=$this->model->getBook($id); /*FICHA DETALLE DE ITEM*/
        $country=$this->model->getCountry($book->id_country);
        $this->view->showBook($book,$country,$user_rol);
    }

    function addBook(){
        $this->authHelper->checkLoggedIn();

        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $title = $_REQUEST['title'];
            $autor = $_REQUEST['autor'];
            $year = $_REQUEST['year'];
            $country = $_REQUEST['country'];

            if($_FILES['input_image']['type'] == "image/jpg" || 
                $_FILES['input_image']['type'] == "image/jpeg" || 
                $_FILES['input_image']['type'] == "image/png"){ 
                $image = $_FILES['input_image']['tmp_name'];
                $this->model->addBook($title, $autor, $year, $country, $image);
            }else{
                $this->model->addBook($title, $autor, $year, $country);
                }
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
        $this->authHelper->checkLoggedIn();
        $countries=$this->model->getCountries();
        $this->view->showListCountriesAdmin($countries);
    }

/*AGREGAR ITEM*/
    function addCountry(){
        $this->authHelper->checkLoggedIn();
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $name = $_REQUEST['name'];

            $exist =$this->model->existCountry($name);
            if (empty($exist)){ 
                $this->model->addCountry($name);
                $this->view->showAdminListLocation();
            }
            else {
                $this->view->showExist($name); 
            } 
        }
        else {
            $this->view->showError('countriesAdmin'); 
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
            $this->view->showError('booksAdmin');
            
        } 
    }

/*BORRAR PAIS*/
    function delCountry($id){
        $this->authHelper->checkLoggedIn();
        $books=$this->model->getBooks();                                /*traigo todos los libros*/
        $country=$this->model->getCountry($id);                         /*traigo todos los paises*/
        $exist=FALSE;                                                   /*para comprobar si existe el pais dentro de libros*/

        $total = count($books);                                         /*limite superior para el while*/
        $index=0;                                                       /*inicio para el while*/ 

        while (($exist === FALSE) && ($index < $total)) {               /* si existe es falso y el indice del ciclo es menor que el numero de registros*/  
            if ($country->id_country == $books[$index]->id_country){    /* existe el id_pais en algun libro?*/
                $exist = TRUE;                                           /*existe --> salgo*/   
            }
            $index++;
        }
        if ($exist === FALSE) {             /*si no existe --> borro*/
            $this->model->delCountry($id);
            $this->view->showCorrect($id,'countriesAdmin');
        }
        else {
            $this->view->showError('countriesAdmin');
            
        } 
    }
/****************************************************************/
/****************************************************************/
/****************************************************************/

/*BUSQUEDA SEGUN FILTRO ELEGIDO*/
    function search(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $buscar = $_REQUEST['buscar'];
            $opcion = $_REQUEST['opcion'];
        }
        
        $rows=$this->model->search($buscar, $opcion);
        if (empty($rows)){
            $this->view->showError('booksAdmin');
        }
        else {
        $this->view->searchList($rows);
        }
    }


}

