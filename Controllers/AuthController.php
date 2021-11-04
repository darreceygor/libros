<?php

include_once "Views/AuthView.php";
include_once "Views/View.php";

include_once "Models/UserModel.php";
include_once "Models/Model.php";


class AuthController {

    private $usermodel;
    private $authview;
    private $view;
    private $authHelper;

    public function __construct(){
        $this->authview = new AuthView();
        $this->view = new View();

        $this->usermodel = new UserModel();
        $this->model = new Model();

        $this->authHelper = new AuthHelper();
    }

    public function showLogin(){
        $this->authview->showFormLogin();
    
    }

    public function userLogin() {

        //Creo la cuenta cuando venga en el POST

        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            //Obtengo el usuario de la base de datos

            $user = $this->usermodel->getUserLogin($email);

            //Si el usuario existe y las contraseñas coinciden
            if($user && password_verify($password,$user->password)){
                session_start();
                $_SESSION['USER_ID'] = $user->id;
                $_SESSION['USER_EMAIL'] = $user->email;
                $_SESSION['USER_ROL'] = $user->rol;

                header("Location: " . BASE_URL);
            }else{
                $this->authview->showFormLogin("Usuario o contraseña invalido");
            }
        }

    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location:". BASE_URL);
    }
       
    function userAdmin(){
        $this->authHelper->checkLoggedIn();
        $users=$this->model->getUsers();
        $this->view->showListUser($users); 
    }

    function user(){
        $this->authview->showFormRegister();
    }   
    
    function addUser(){
        $rol='admin';

        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $email = $_REQUEST['email'];
            $password=$_POST['password'];

            $hash = password_hash($password, PASSWORD_DEFAULT);

            $this->usermodel->addUser($email,$hash,$rol);
            $this->authview->showAddUser(); 
        }
    }

    function delUser($id){
        $this->authHelper->checkLoggedIn();
        $this->usermodel->delUser($id);
        $this->view->showAdminUserLocation();

    }

    function editUser($id){
        $this->authHelper->checkLoggedIn();
        $user=$this->usermodel->getUser($id);
        $this->authview->editUser($user);           /*EDITAR: TRAE LA FICHA SEGUN ID*/
    }

    function modUser ($id){  
        $this->authHelper->checkLoggedIn();
        if ($_SERVER['REQUEST_METHOD'] == 'GET'){
            $rol=$_REQUEST['rol'];
            $this->usermodel->modUser($id,$rol);
            $this->view->showAdminUserLocation();
        }
        
    }   

}