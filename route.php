<?php
require_once "Controller/BooksController.php";
require_once "Controller/AuthController.php";

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');
define('ADMIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/admin');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);




// determina que camino seguir según la acción
switch ($params[0]) {
    case 'login':
        $authController = new AuthController();
        $authController->showLogin();
        break;
    case 'verify':
        $authController = new AuthController();
        $authController->login();
        break;
    case 'logout':
        $authController = new AuthController();
        $authController->logout();
        break;
    case 'home': 
        $booksController = new BooksController();
        $booksController->showHome(); 
        break;
    case 'admin': 
        $booksController = new BooksController();
        $booksController->showListBooks(); 
        break;
    case 'list': 
        $booksController = new BooksController();
        $booksController->showList(); 
        break;
    case 'createBook': 
        $booksController = new BooksController();
        $booksController->createBook(); 
        break;
    case 'deleteBook': 
        $booksController = new BooksController();
        $booksController->deleteBook($params[1]); 
        break;
    case 'editBook': 
        $booksController = new BooksController();
        $booksController->editBook($params[1]); 
        break;
    case 'viewBook': 
        $booksController = new BooksController();
        $booksController->viewBook($params[1]); 
        break;
    case 'updateBook': 
        $booksController = new BooksController();
        $booksController->updateBook($params[1]); 
        break;
   
    default: 
        echo('404 Page not found'); 
        break;
}


?>
