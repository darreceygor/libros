<?php
require_once "Controller/BooksController.php";


define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');


// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

$booksController = new BooksController();


// determina que camino seguir según la acción
switch ($params[0]) {
    case 'home': 
        $booksController->showHome(); 
        break;
    case 'admin': 
        $booksController->showListBooks(); 
        break;

    case 'list': 
        $booksController->showList(); 
        break;
    case 'createBook': 

        $booksController->createBook(); 
        break;
    case 'deleteBook': 
        $booksController->deleteBook($params[1]); 
        break;
    case 'editBook': 
        $booksController->editBook($params[1]); 
        break;
    case 'viewBook': 
        $booksController->viewBook($params[1]); 
        break;
    default: 
        echo('404 Page not found'); 
        break;
}


?>
