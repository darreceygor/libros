<?php

require_once 'libs/Router.php';

$router = new Router();

//tabla de ruteo
$router->addRoute('tareas','GET','ApiController','getAll');

$resource = $_GET['resource'];
$method = $_SERVER['REQUEST_METHOD'];

$router->route($resource,$method);


