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

    public function login() {

        //Creo la cuenta cuando venga en el POST

        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            //Obtengo el usuario de la base de datos

            $user = $this->usermodel->getUser($email);
            
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
        $rol='user';

        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $email = $_REQUEST['email'];
            $password=password_hash($_POST['password'], PASSWORD_BCRYPT);


        $this->usermodel->addUser($email,$password,$rol);
        $this->authview->showAddUser(); 
        }
    }

    function delUser($id){
        $this->authHelper->checkLoggedIn();
        $this->usermodel->delUser($id);
        $this->view->showAdminUserLocation();

    }

        

}