<?php

include_once "Views/AuthView.php";
include_once "Models/UserModel.php";


class AuthController {

    private $model;
    private $view;

    public function __construct(){
        $this->view = new AuthView();
        $this->model = new UserModel();
    }

    public function showLogin(){
        $this->view->showFormLogin();
    
    }

    public function login() {

        //Creo la cuenta cuando venga en el POST

        if(!empty($_POST['email'])&& !empty($_POST['password'])){
            $email=$_POST['email'];
            $password=$_POST['password'];

            //Obtengo el usuario de la base de datos

            $user = $this->model->getUser($email);
            
            //Si el usuario existe y las contraseñas coinciden
            if($user && password_verify($password,$user->password)){
                session_start();
                $_SESSION['USER_ID'] = $user->id;
                $_SESSION['USER_EMAIL'] = $user->email;


                header ("Location:". ADMIN);
            }else{
                $this->view->showFormLogin("Usuario o contraseña invalido");
            }
        }

    }

    public function logout(){
        session_start();
        session_destroy();
        header("Location:". ADMIN);
    }

}