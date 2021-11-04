<?php

require_once 'libs/Router.php';
require_once 'API/APIController.php';

$router = new Router();

//tabla de ruteo
$router->addRoute('comments','GET','APIController','getAllComments');
$router->addRoute('comment','POST','APIController','addComment');
$router->addRoute('comments','DELETE','APIController','delComment');

$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($resource,$method);


