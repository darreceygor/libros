<?php

require_once './libs/smarty-3.1.39/libs/Smarty.class.php';

class AuthView {

    function __construct(){
        $this->smarty = new Smarty();

    }
    function showFormLogin ($error = null){
        $this->smarty->assign('error', $error);
        $this->smarty->display('templates/formLogin.tpl');
        
    }

    function showAddUser(){
        $this->smarty->display('templates/formRegister.tpl');
    }

    function showFormRegister(){
        $this->smarty->display('templates/formRegister.tpl');
    }
    
    function editUser($users){
        $this->smarty->assign('users', $users);
        $this->smarty->display('templates/editUser.tpl');
    }
}