<?php
 
require_once ('libs/Router.php');
require_once ('api/APIController.php');
require_once ('api/APIView.php');

$router = new Router();

//tabla de ruteo
$router->addRoute('comments','GET','APIController','getAll');               // Trae todos los comentarios
$router->addRoute('comments/:ID','GET','APIController','getOne');           // Trae comentario segun un ID

$router->addRoute('comments', 'POST', 'APIController', 'addComment');       //Agregar comentario
$router->addRoute('comments/:ID','DELETE','APIController','delComment');    //Borrar comentario
 
$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($resource,$method);

 