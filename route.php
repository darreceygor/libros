
    
<?php

require_once "Controllers/Controller.php";
require_once "Controllers/AuthController.php";
require_once 'libs/Router.php';

define('BASE_URL', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/');
define('LOGIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/login');
define('ADMIN', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/admin');
define('COUNTRIES', '//'.$_SERVER['SERVER_NAME'] . ':' . $_SERVER['SERVER_PORT'] . dirname($_SERVER['PHP_SELF']).'/countriesAdmin');



// lee la acción
if (!empty($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = 'home'; // acción por defecto si no envían
}

$params = explode('/', $action);

// determina que camino seguir según la acción
switch ($params[0]) {

    case 'home':
        $controller = new Controller();
        $controller->showHome(); 
        break; 
    case 'admin': 
        $controller = new Controller();
        $controller->showAdmin(); 
        break; 
       
/*********************************************************************/
/**************************** MENU USERS *****************************/
    case 'login':
        $authController = new AuthController();
        $authController->showLogin(); 
        break;
    case 'logout': 
        $authController = new AuthController();
        $authController->logout();  
        break;   
    case 'verify': 
        $authController = new AuthController();
        $authController->userLogin(); 
        break;
    case 'userAdmin':
        $authController = new AuthController();
        $authController->userAdmin(); 
        break;
    case 'user':
        $authcontroller = new AuthController;
        $authcontroller->user();
        break; 
    case 'addUser':
        $authController = new AuthController;
        $authController->addUser();
        break;
    case 'delUser':
        $authcontroller = new AuthController;
        $authcontroller->delUser($params[1]);
        break; 
    case 'modUser':
        $authController = new AuthController;
        $authController->modUser($params[1]);
        break;
    case 'editUser':
        $authController = new AuthController;
        $authController->editUser($params[1]);
        break;
    

/************************ FIN MENU USERS *****************************/       
/*********************************************************************/
/**************************** MENU BOOKS *****************************/
    case 'booksAdmin': 
        $controller = new Controller();
        $controller->getBooks(); 
        break;
    case 'books': 
        $controller = new Controller();
        if (!isset($params[1])){
            $params[1]=0;
        }
        $controller->getListBooks($params[1]); 
        break; 
    case 'book': 
        $controller = new Controller();
        $controller->getBook($params[1],$params[2]); 
        break;   
    case 'addBook':
        $controller =new Controller();
        $controller->addBook();
        break;
    case 'editBook':
        $controller = new Controller();
        $controller->editBook($params[1]);
        break;    
    case 'modBook':
        $controller = new Controller();
        $controller->modBook($params[1]);
        break;
    case 'delBook':
        $controller = new Controller();
        $controller->delBook($params[1]);
    
/************************ FIN MENU BOOKS *****************************/       
/*********************************************************************/
/**************************** MENU COUNTRIES *************************/
    
    case 'countriesAdmin': 
        $controller = new Controller();
        $controller->getCountriesAdmin(); 
        break;    
    case 'countries': 
        $controller = new Controller();
        $controller->getCountries(); 
        break;
    case 'addCountry':
        $controller = new Controller();
        $controller->addCountry();   
        break; 
    case 'editCountry':
        $controller = new Controller();
        $controller->editCountry($params[1]);
        break;
    case 'modCountry':
        $controller = new Controller();
        $controller->modCountry($params[1]);  
        break;
    case 'delCountry':
        $controller = new Controller();
        $controller->delCountry($params[1]);
        break;
/************************ FIN MENU COUNTRIES *************************/      
/*********************************************************************/
/**************************** MENU SEARCH ****************************/ 
    case 'search':
        $controller= new Controller();
        $controller->search($params[1]);
        break;
    default:
        echo'DEFAULT';
        break;
        die();
    }

