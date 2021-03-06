<?php

class AuthHelper {
    function __construct() {
        // abre la sessión siempre para usar el helper
        if (session_status() != PHP_SESSION_ACTIVE) {
            session_start();
        }
    }

    public function login($user) {
        $_SESSION['USER_ID'] = $user->id;
        $_SESSION['USER_EMAIL'] = $user->email;
        $_SESSION['USER_ROL'] = $user->rol;
    }

    public function checkLoggedIn() {
        if (empty($_SESSION['USER_ID'])) {
            header("Location: " . BASE_URL . 'admin');
            die();
        }
    }

    function logout() {
        session_destroy();
        header("Location: " . BASE_URL . 'login');
    } 
}
