<?php

require_once ('libs/smarty-3.1.39/libs/Smarty.class.php');


class View {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

/*PAGINAS PRINCIPALES*/
    function showHomePage (){
        $this->smarty->display('templates/home.tpl');
    }

    function showAdminPage (){
        $this->smarty->display('templates/admin.tpl');
    }

/*FIN PAGINAS PRINCIPALES*/
/****************************************************************/
/****************************************************************/

    /*UBICACIONES*/
    function showHomeLocation(){
        header("Location: ".BASE_URL."home");
    }

    function showAdminLocation(){
        header("Location: ".BASE_URL."admin");
    }

    function showAdminListLocation(){
        header("Location: ".BASE_URL."countriesAdmin");
    }

    function showAdminBookLocation(){
        header("Location: ".BASE_URL."booksAdmin");
    }
    function showAdminUserLocation(){
        header("Location: ".BASE_URL."userAdmin");
    }

    function showListLocation(){
        header("Location: ".BASE_URL."books");
    }

/*FIN UBICACIONES*/
/****************************************************************/
/****************************************************************/

/*ERROR GENERAL*/
    function showError($back = NULL){
        $this->smarty->assign('back',$back);
        $this->smarty->display('templates/showError.tpl');
    }

/*LISTADO DE USUARIOS*/
    function showListUser($users){
            $this->smarty->assign('users', $users);
            $this->smarty->assign('user_rol','admin');
            $this->smarty->display('templates/listUser.tpl');
        }
    
/*RESULTADO DE LA BUSQUEDA*/
    function searchList($rows){
        $this->smarty->assign('rows', $rows);
        $this->smarty->display('templates/searchList.tpl');
        
    }

/*EXISTE PAIS*/    
    function showExist($name){
        $this->smarty->assign('name', $name);
         $this->smarty->display('templates/showExist.tpl');
    }

    function showCorrect($id,$back = NULL){
        $this->smarty->assign('id',$id);
        $this->smarty->assign('back',$back);
        $this->smarty->display('templates/showCorrect.tpl');
    }

/************ PAGINACION **********************/
    function showListBooks($books, $rows, $itemsPerPage, $pages,$page){
    /* variables paginacion*/    

        $classNext='';
        $classPrev='';
        $this->smarty->assign('rows', $rows);
        $this->smarty->assign('itemsPerPage', $itemsPerPage);
        $this->smarty->assign('pages', $pages);
        $this->smarty->assign('page', $page);
        $this->smarty->assign('previous', $page-1);
        if ($page-1<=0){
            $classPrev='disabled';
        }
        $this->smarty->assign('classPrev',$classPrev);
        $this->smarty->assign('next', $page+1);
        if ($page+1>$pages){
            $classNext='disabled';
        }
        $this->smarty->assign('classNext',$classNext);
    /* fin variables paginacion*/ 

        $this->smarty->assign('books', $books);
        
        $this->smarty->assign('user_rol','user'); 
        $this->smarty->display('templates/listBooks.tpl');
    }

/**********************************************/

    function showBook($book, $country,$user_rol){
        $this->smarty->assign('book', $book);
        $this->smarty->assign('country', $country);
        $this->smarty->assign('user_rol', $user_rol);
        $this->smarty->display('templates/showBook.tpl');
    }

    function showListBooksAdmin($books,$countries){
        $this->smarty->assign('books', $books);
        $this->smarty->assign('countries',$countries);
        $this->smarty->assign('user_rol','admin');
        $this->smarty->display('templates/listBooks.tpl');
    } 

    function editBook($book, $countries) {
        $this->smarty->assign('book', $book);
        $this->smarty->assign('countries', $countries);
        $this->smarty->display('templates/editBook.tpl');
    }
    
    function showListCountries($countries){
        $this->smarty->assign('countries', $countries);
        $this->smarty->assign('user_rol','user');
        $this->smarty->display('templates/listCountries.tpl');
    }

    function showListCountriesAdmin($countries){
        $this->smarty->assign('countries', $countries);
        $this->smarty->assign('user_rol','admin');
        $this->smarty->display('templates/listCountries.tpl');
    }

    function editCountry($country) {
        $this->smarty->assign('titulo', 'Modificaci??n de Pais');
        $this->smarty->assign('country', $country);
        $this->smarty->display('templates/editCountry.tpl');
    }
 
/*******************************************/



}