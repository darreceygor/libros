<?php

class UserModel{

    private $db;
    
     function __construct(){
         $this->db = new PDO('mysql:host=localhost;'.'dbname=db_book2;charset=utf8', 'root', '');
     }

    /* levanto todos los libros para render de listados */
    function getUser($email){
          $query = $this->db->prepare('SELECT * FROM users WHERE email = ?');
          $query->execute([$email]);
          $user = $query->fetch(PDO::FETCH_OBJ);

          return $user;
     }

    function addUser($email,$password){
        $query = $this->db->prepare('INSERT * FROM users(email,password) VALUES (?,?)');
        $query->execute([$email,$password]);

   }

}
