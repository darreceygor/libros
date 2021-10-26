<?php

require_once ('libs/smarty-3.1.39/libs/Smarty.class.php');

class View {

    private $smarty;

    function __construct(){
        $this->smarty = new Smarty();
    }

    function showHomePage (){
        $this->smarty->display('templates/home.tpl');
    }

    function showAdminPage (){
        $this->smarty->display('templates/admin.tpl');
    }

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

    function showListLocation(){
        header("Location: ".BASE_URL."books");
    }

    function showError(){
        $this->smarty->display('templates/error.tpl');
    }

    function showBooks($books){
        $this->smarty->assign('estado', "admin");
        $this->smarty->assign('books', $books);
        $this->smarty->display('templates/showBooks.tpl'); /* muestra el listado de libros */
    }

    function showBook($book, $country,$user_rol){
        $this->smarty->assign('book', $book);
        $this->smarty->assign('country', $country);
        $this->smarty->assign('user_rol', $user_rol);
        $this->smarty->display('templates/showBook.tpl');
    }

    function showListBooks($books){
        $this->smarty->assign('books', $books);
        $this->smarty->assign('user_rol','books');
        $this->smarty->display('templates/listBooks.tpl');
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
        $this->smarty->assign('user_rol','books');
        $this->smarty->display('templates/listCountries.tpl');
    }

    function showListCountriesAdmin($countries){
        $this->smarty->assign('countries', $countries);
        $this->smarty->assign('user_rol','admin');
        $this->smarty->display('templates/listCountries.tpl');
    }

    function editCountry($country) {
        $this->smarty->assign('titulo', 'Modificación de Pais');
        $this->smarty->assign('country', $country);
        $this->smarty->display('templates/editCountry.tpl');
    }

    





}